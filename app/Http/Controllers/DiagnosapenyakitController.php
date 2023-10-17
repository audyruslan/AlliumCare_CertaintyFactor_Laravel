<?php

namespace App\Http\Controllers;

use App\Models\Gejalapenyakit;
use App\Models\Hasilpenyakit;
use App\Models\Value;
use Barryvdh\DomPDF\Facade\PDF as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DiagnosapenyakitController extends Controller
{
  public function diagnosa_penyakit()
  {
    $gejalas = Gejalapenyakit::all();
    $kondisipenyakits = Value::orderby('value', 'desc')->get();
    return view('diagnosa_penyakit', [
      'title' => 'Diagnosa Penyakit',
      'gejalas' => $gejalas,
      'kondisipenyakits' => $kondisipenyakits
    ]);
  }

  public function tingkat_keyakinan($keyakinan)
  {
    switch ($keyakinan) {
      case 0:
        return 'Tidak Tahu';
        break;
      case 0.2:
        return 'Tidak Yakin';
        break;
      case 0.4:
        return 'Sedikit Yakin';
        break;
      case 0.6:
        return 'Cukup Yakin';
        break;
      case 0.8:
        return 'Yakin';
        break;
      case 1:
        return 'Sangat Yakin';
        break;
    }
  }


  public function kalkulasi_cf($data)
  {
    $data_penyakit = [];
    $gejala_terpilih = [];
    foreach ($data['diagnosa'] as $input) {
      if (!empty($input)) {
        $opts = explode('+', $input);
        $gejala = Gejalapenyakit::with('penyakits')->find($opts[0]);

        foreach ($gejala->penyakits as $penyakit) {
          if (empty($data_penyakit[$penyakit->id])) {
            $data_penyakit[$penyakit->id] = [$penyakit, [$gejala, $opts[1], $penyakit->pivot->value]]; 
          } else {
            array_push($data_penyakit[$penyakit->id], [$gejala, $opts[1], $penyakit->pivot->value]);
          }

          if (empty($gejala_terpilih[$gejala->id])) {
            $gejala_terpilih[$gejala->id] = [
              'nama' => $gejala->name,
              'kode' => $gejala->code,
              'cf_user' => $opts[1],
              'keyakinan' => $this->tingkat_keyakinan($opts[1])
            ];
          }
        }
      }
    }

    $hasil_diagnosa = [];
    $cf_max = null;
    foreach ($data_penyakit as $final) {
      if (count($final) < 3) {
        continue;
      }
      $cf1 = null;
      $cf2 = null;
      $cf_combine = 0;
      $hasil_cf = null;
      foreach ($final as $key =>
        $value) {
        if ($key == 0) {
          continue;
        }

        if ($key == 1) {
          $cf1 = $final[$key][2] * $final[$key][1];
        } else {
          if ($cf_combine != 0) {
            $cf1 = $cf_combine;
            $cf2 = $final[$key][2] * $final[$key][1];

            if ($cf1 < 0 || $cf2 < 0) {
              $cf_combine = ($cf1 + $cf2) / (1 - min($cf1, $cf2));
            } else {
              $cf_combine = $cf1 +
                ($cf2 * (1 - $cf1));
            }
            $hasil_cf = $cf_combine;
          } else {
            $cf2 = $final[$key][2] * $final[$key][1];
            if (
              $cf1 <
              0 || $cf2 < 0
            ) {
              $cf_combine = ($cf1 + $cf2) / (1 - min($cf1, $cf2));
            } else {
              $cf_combine = $cf1 + ($cf2 *
                (1 - $cf1));
            }
            $hasil_cf = $cf_combine;
          }
        }
        if (count($final) - 1 == $key) {
          if ($cf_max == null) {
            $cf_max = [$hasil_cf, $final[0]->id, "{$final[0]->name} ({$final[0]->code})", $final[0]->det_penyakit, $final[0]->srn_penyakit, $final[0]->images];
          } else {
            $cf_max = ($hasil_cf > $cf_max[0])
              ? [$hasil_cf, $final[0]->id, "{$final[0]->name} ({$final[0]->code})", $final[0]->det_penyakit, $final[0]->srn_penyakit, $final[0]->images]
              : $cf_max;
          }

          $hasil_diagnosa[$final[0]->id]['hasil_cf'] = $hasil_cf;

          $cf1 = null;
          $cf2 = null;
          $cf_combine = 0;
          $hasil_cf = null;
        }



        if (empty($hasil_diagnosa[$final[0]->id])) {
          $hasil_diagnosa[$final[0]->id] = [
            'nama_penyakit' => $final[0]->name,
            'code_penyakit' => $final[0]->code,
            'image_penyakit' => $final[0]->images,
            'gejala' => [
              [
                'nama' => $final[$key][0]->name,
                'code' => $final[$key][0]->code,
                'cf_user' => $final[$key][1],
                'cf_role' => $final[$key][2],
                'hasil_perkalian' => $final[$key][2] * $final[$key][1]
              ]
            ]
          ];
        } else {
          array_push($hasil_diagnosa[$final[0]->id]['gejala'], [
            'nama' => $final[$key][0]->name,
            'code' => $final[$key][0]->code,
            'image' => $final[$key][0]->images,
            'cf_user' => $final[$key][1],
            'cf_role' => $final[$key][2],
            'hasil_perkalian' => $final[$key][2] * $final[$key][1]
          ]);
        }
      }
    }

    return [
      'id_penyakit' => $cf_max[1],
      'hasil_diagnosa' => $hasil_diagnosa,
      'gejala_terpilih' => $gejala_terpilih,
      'cf_max' => $cf_max
    ];
  }

  public function diagnosa(Request $request)
  {
    $data = $request->all();

    $result = $this->kalkulasi_cf($data);

    $name = $request->name;

    if ($result['cf_max'] == null) {
      return back()->with('status', 'Silahkan Pilih Salah Satu Kondisi dari Gejala Penyakit');
    }

    $riwayat = Hasilpenyakit::create([
      'nama' => $request->name,
      'id_penyakit' => $result['id_penyakit'],
      'hasil_diagnosa' => serialize($result['hasil_diagnosa']),
      'cf_max' => serialize($result['cf_max']),
      'gejala_terpilih' => serialize($result['gejala_terpilih'])
    ]);

    $path = public_path('storage/downloads');

    if (!File::isDirectory($path)) {
      File::makeDirectory($path, 0777, true, true);
    }

    $file_pdf = 'Diagnosapenyakit-' . $name . '-' . time() . '.pdf';

    PDF::loadView('pdf.riwayat_penyakit', ['id' => $riwayat->id])
      ->save($path . "/" . $file_pdf);

    $riwayat->update(['file_pdf' => $file_pdf]);

    return redirect()->to(route('hasil-penyakit', $riwayat->id));
  }
}