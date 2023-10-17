<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiagnosaHamaRequest;
use App\Models\Gejalahama;
use App\Models\Hasilhama;
use App\Models\Value;
use Barryvdh\DomPDF\Facade\PDF as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class DiagnosahamaController extends Controller
{
  public function diagnosa_hama()
  {
    $gejalas = Gejalahama::all();
    $kondisihamas = Value::orderby('value', 'desc')->get();
    return view('diagnosa_hama', [
      'title' => 'Diagnosa Hama',
      'gejalas' => $gejalas,
      'kondisihamas' => $kondisihamas
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
    $data_hama = [];
    $gejala_terpilih = [];
    foreach ($data['diagnosa'] as $input) {
      if (!empty($input)) {
        $opts = explode('+', $input);
        $gejala = Gejalahama::with('hamas')->find($opts[0]);

        foreach ($gejala->hamas as $hama) {
          if (empty($data_hama[$hama->id])) {
            $data_hama[$hama->id] = [$hama, [$gejala, $opts[1], $hama->pivot->value]];
          } else {
            array_push($data_hama[$hama->id], [$gejala, $opts[1], $hama->pivot->value]);
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
    foreach ($data_hama as $final) {
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
              $cf_combine = $cf1 + ($cf2
                * (1 - $cf1));
            }
            $hasil_cf = $cf_combine;
          } else {
            $cf2 = $final[$key][2] * $final[$key][1];
            if (
              $cf1 < 0 || $cf2
              < 0
            ) {
              $cf_combine = ($cf1 + $cf2) / (1 - min($cf1, $cf2));
            } else {
              $cf_combine = $cf1 + ($cf2 * (1 - $cf1));
            }
            $hasil_cf = $cf_combine;
          }
        }
        if (count($final) - 1 == $key) {
          if ($cf_max == null) {
            $cf_max = [$hasil_cf, $final[0]->id, "{$final[0]->name} ({$final[0]->code})", $final[0]->det_hama, $final[0]->srn_hama, $final[0]->images];
          } else {
            $cf_max = ($hasil_cf > $cf_max[0])
              ? [$hasil_cf, $final[0]->id, "{$final[0]->name} ({$final[0]->code})", $final[0]->det_hama, $final[0]->srn_hama, $final[0]->images]
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
            'id_hama' => $final[0]->id,
            'nama_hama' => $final[0]->name,
            'code_hama' => $final[0]->code,
            'image_hama' => $final[0]->images,
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

    if (empty($cf_max)) {
      $cf_max = [0, 0];
    }

    return [
      'id_hama' => $cf_max[1],
      'hasil_diagnosa' => $hasil_diagnosa,
      'gejala_terpilih' => $gejala_terpilih,
      'cf_max' => $cf_max
    ];
  }

  public function diagnosa(DiagnosaHamaRequest $request)
  {
    $data = $request->all();

    $result = $this->kalkulasi_cf($data);

    $name = $request->name;

    // Memeriksa jika tidak ada kondisi yang dipilih
    $selectedConditions = array_filter($data['diagnosa']);
    if (empty($selectedConditions)) {
      return back()->with('status', 'Silakan Pilih Kondisi dari Gejala Hama terlebih dahulu.');
    }

    // Memeriksa jika hanya satu kondisi yang dipilih
    if (count($selectedConditions) === 1) {
      return back()->with('status', 'Pilih lebih dari satu kondisi dari Gejala Hama.');
    }

    $riwayat = Hasilhama::create([
      'nama' => $request->name,
      'id_hama' => $result['id_hama'],
      'hasil_diagnosa' => serialize($result['hasil_diagnosa']),
      'cf_max' => serialize($result['cf_max']),
      'gejala_terpilih' => serialize($result['gejala_terpilih'])
    ]);

    $path = public_path('storage/downloads');

    if (!File::isDirectory($path)) {
      File::makeDirectory($path, 0777, true, true);
    }

    $file_pdf = 'DiagnosaHama-' . $name . '-' . time() . '.pdf';

    PDF::loadView('pdf.riwayat_hama', ['id' => $riwayat->id])->save($path . "/" . $file_pdf);

    $riwayat->update(['file_pdf' => $file_pdf]);

    return redirect()->to(route('hasil-hama', $riwayat->id));
  }
}