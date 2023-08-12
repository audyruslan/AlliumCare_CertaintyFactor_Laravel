<?php

namespace App\Http\Controllers;

use App\Models\Kondisipenyakit;
use Illuminate\Http\Request;

class KondisipenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kondisipenyakit.index', [
            'title' => 'Data Kondisi Penyakit',
            'kondisipenyakit' => Kondisipenyakit::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kondisipenyakit.create', [
            'title' => 'Tambah Kondisi Hama',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required'
        ]);

        Kondisipenyakit::create([
            'name' => $request->name,
            'value' => $request->value
        ]);

        return redirect()->route('kondisipenyakit.index')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kondisipenyakit  $kondisipenyakit
     * @return \Illuminate\Http\Response
     */
    public function show(Kondisipenyakit $kondisipenyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kondisipenyakit  $kondisipenyakit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('kondisipenyakit.edit', [
            'title' => 'Edit Kondisi Penyakit',
            'kondisipenyakit' => Kondisipenyakit::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kondisipenyakit  $kondisipenyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required'
        ]);


        Kondisipenyakit::where('id', $id)->update([
            'name' => $request->name,
            'value' => $request->value
        ]);

        return redirect()->route('kondisipenyakit.index')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kondisipenyakit  $kondisipenyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kondisipenyakit::where('id', $id)->delete();
        return redirect()->route('kondisipenyakit.index')->with('status', 'Data Berhasil Dihapus!');
    }
}