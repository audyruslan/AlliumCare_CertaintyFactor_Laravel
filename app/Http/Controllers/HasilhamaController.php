<?php

namespace App\Http\Controllers;

use App\Models\Gejalahama;
use App\Models\Hama;
use App\Models\Hasilhama;
use App\Models\Riwayathama;
use App\Models\Ruleshama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HasilhamaController extends Controller
{
    public function index()
    {
      $hamas = Hama::all();
      $riwayat = Hasilhama::all();
      return view('riwayatdiagnosa.hama', [
      'title' => 'Riwayat Diagnosa Hama',
      'riwayats' => $riwayat,
      'hamas' => $hamas
      ]);
    }

    public function show($id)
    {
        return view('riwayatdiagnosa.hasil_hama', [
        'title' => 'Riwayat Hasil Diagnosa Hama',
        'riwayat' => Hasilhama::find($id)
        ]);
    }

    public function destroy($id)
    {
      $hama = Hasilhama::find($id); 
      $destination = 'storage/downloads/' . $hama->file_pdf;
      if (File::exists($destination)) {
      File::delete($destination);
      }
      Hasilhama::where('id',$id)->delete();
      return redirect()->route('riwayatdiagnosa-hama')->with('status', 'Data Berhasil Dihapus!');
    }
}
