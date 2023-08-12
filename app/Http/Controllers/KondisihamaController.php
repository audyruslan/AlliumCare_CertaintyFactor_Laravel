<?php

namespace App\Http\Controllers;

use App\Models\Kondisihama;
use Illuminate\Http\Request;

class KondisihamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kondisihama.index', [
            'title' => 'Kondisi Hama',
            'kondisihama' => Kondisihama::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kondisihama.create', [
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

        Kondisihama::create([
            'name' => $request->name,
            'value' => $request->value
        ]);

        return redirect()->route('kondisihama.index')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('kondisihama.edit', [
            'title' => 'Edit Kondisi Hama',
            'kondisihama' => Kondisihama::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required'
        ]);


        Kondisihama::where('id', $id)->update([
            'name' => $request->name,
            'value' => $request->value
        ]);

        return redirect()->route('kondisihama.index')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kondisihama::where('id', $id)->delete();
        return redirect()->route('kondisihama.index')->with('status', 'Data Berhasil Dihapus!');
    }
}
