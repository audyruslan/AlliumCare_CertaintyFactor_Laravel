<?php

namespace App\Http\Controllers;

use App\Http\Requests\GejalapenyakitCreateRequest;
use App\Http\Requests\GejalapenyakitEditRequest;
use App\Models\Gejalapenyakit;
use App\Models\Penyakit;
use App\Models\Rulespenyakit;

class GejalapenyakitController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('gejalapenyakit.index', [
      'title' => 'Gejala Penyakit',
      'gejalapenyakit' => Gejalapenyakit::orderby('code', 'asc')->get()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $gejalaPenyakitCode = Gejalapenyakit::generateGejalaPenyakitCode();
    return view('gejalapenyakit.create', [
      'title' => 'Tambah Gejala Penyakit',
      'gejalaPenyakitCode' => $gejalaPenyakitCode
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(GejalapenyakitCreateRequest $request)
  {
    Gejalapenyakit::create([
      'code' => $request->code,
      'name' => $request->name,
    ]);

    $penyakits = Penyakit::all();
    $gejalapenyakits = Gejalapenyakit::orderby('id', 'desc')->first();

    foreach ($penyakits as $h) {
      Rulespenyakit::create([
        'penyakit_id' => $h->id,
        'gejalapenyakit_id' => $gejalapenyakits->id,
        'value' => 0.0
      ]);
    }

    return redirect()->route('gejalapenyakit.index')->with('status', 'Data Berhasil Ditambahkan!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Gejalapenyakit  $gejalapenyakit
   * @return \Illuminate\Http\Response
   */
  public function show(Gejalapenyakit $gejalapenyakit)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Gejalapenyakit  $gejalapenyakit
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $gejalapenyakit = Gejalapenyakit::where('id', $id)->first();
    return view('gejalapenyakit.edit', [
      'title' => 'Edit Gejala Penyakit',
      'gejalapenyakit' => $gejalapenyakit
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Gejalapenyakit  $gejalapenyakit
   * @return \Illuminate\Http\Response
   */
  public function update(GejalapenyakitEditRequest $request, $id)
  {
    Gejalapenyakit::where('id', $id)
      ->update([
        'code' => $request->code,
        'name' => $request->name
      ]);

    return redirect()->route('gejalapenyakit.index')->with('status', 'Data Berhasil Diubah!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Gejalapenyakit  $gejalapenyakit
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Gejalapenyakit::where('id', $id)->delete();
    Rulespenyakit::where('gejalapenyakit_id', $id)->delete();
    return redirect()->route('gejalapenyakit.index')->with('status', 'Data Berhasil DiHapus!');
  }
}