<?php

namespace App\Http\Controllers;

use App\Models\Hasilpenyakit;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HasilpenyakitController extends Controller
{
      public function index()
      {
            $penyakits = Penyakit::all();
            $riwayat = Hasilpenyakit::all();
            return view('riwayatdiagnosa.penyakit', [
                  'title' => 'Riwayat Diagnosa Penyakit',
                  'riwayats' => $riwayat,
                  'penyakits' => $penyakits
            ]);
      }

      public function show($id)
      {
            return view('riwayatdiagnosa.hasil_penyakit', [
                  'title' => 'Riwayat Hasil Diagnosa Penyakit',
                  'riwayat' => Hasilpenyakit::find($id)
            ]);
      }

      public function destroy($id)
      {
            $penyakit = Hasilpenyakit::find($id);
            $destination = 'storage/downloads/' . $penyakit->file_pdf;
            if (File::exists($destination)) {
                  File::delete($destination);
            }
            Hasilpenyakit::where('id', $id)->delete();
            return redirect()->route('riwayatdiagnosa-penyakit')->with('status', 'Data Berhasil Dihapus!');
      }
}