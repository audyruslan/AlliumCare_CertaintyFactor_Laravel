<?php

namespace App\Http\Controllers;

use App\Http\Requests\HamaCreateRequest;
use App\Http\Requests\HamaEditRequest;
use App\Models\Gejalahama;
use App\Models\Hama;
use App\Models\Ruleshama;
use Illuminate\Support\Facades\File;

class HamaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('hama.index', [
      'title' => 'Hama',
      'hama' => Hama::orderby('id', 'asc')->get()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $hamaCode = Hama::generateHamaCode();
    return view('hama.create', [
      'title' => 'Tambah Hama',
      'hamaCode' => $hamaCode
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(HamaCreateRequest $request)
  {
    if ($request->hasFile('image')) {
      $images = $request->file('image');
      $extention = $images->getClientOriginalExtension();
      $imageName = time() . '.' . $extention;
      $images->move(public_path('images/hama/'), $imageName);
    }

    Hama::create([
      'user_id' => 1,
      'code' => $request->code,
      'name' => $request->name,
      'det_hama' => $request->det_hama,
      'srn_hama' => $request->srn_hama,
      'images' => $request->image = $imageName,
    ]);

    $hama = Hama::orderby('id', 'desc')->first();
    $gejala = Gejalahama::all();

    foreach ($gejala as $gejalas) {
      Ruleshama::create([
        'hama_id' => $hama->id,
        'gejalahama_id' => $gejalas->id,
        'value' => 0.0
      ]);
    }

    return redirect()->route('hama.index')->with('status', 'Data Berhasil Ditambahkan!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Hama  $hama
   * @return \Illuminate\Http\Response
   */
  public function show(Hama $hama)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Hama  $hama
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    return view('hama.edit', [
      'title' => 'Edit Hama',
      'hama' => Hama::find($id)
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Hama  $hama
   * @return \Illuminate\Http\Response
   */
  public function update(HamaEditRequest $request, $id)
  {
    $hama = Hama::find($id);

    $imageName = '';
    if ($request->hasFile('image')) {
      $destination = 'images/hama/' . $hama->images;
      if (File::exists($destination)) {
        File::delete($destination);
      }
      $images = $request->file('image');
      $extention = $images->getClientOriginalExtension();
      $imageName = time() . '.' . $extention;
      $images->move(public_path('images/hama/'), $imageName);
      Hama::where('id', $id)->update([
        'code' => $request->code,
        'name' => $request->name,
        'det_hama' => $request->det_hama,
        'srn_hama' => $request->srn_hama,
        'images' => $imageName
      ]);
    } else {
      $imageName = $hama->images;
      Hama::where('id', $id)->update([
        'code' => $request->code,
        'name' => $request->name,
        'det_hama' => $request->det_hama,
        'srn_hama' => $request->srn_hama,
        'images' => $imageName
      ]);
    }




    return redirect()->route('hama.index')->with('status', 'Data Berhasil Diubah!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Hama  $hama
   * @return \Illuminate\Http\Response
   */

  public function destroy(Hama $hama)
  {
    Hama::destroy($hama->id);
    $destination = 'images/hama/' . $hama->images;
    if (File::exists($destination)) {
      File::delete($destination);
    }
    Ruleshama::where('gejalahama_id', $hama->id)->delete();
    return redirect()->route('hama.index')->with('status', 'Data Berhasil Dihapus!');
  }
}
