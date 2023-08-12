<?php

namespace App\Http\Controllers;

use App\Models\Kondisipenyakit;
use App\Models\Penyakit;
use App\Models\Rulespenyakit;
use App\Models\Setting;
use App\Models\Value;
use Illuminate\Http\Request;

class RulespenyakitController extends Controller
{
  public function index()
  {
    return view('rules.penyakit', [
      'title' => 'Rules Penyakit',
      'penyakit' => Penyakit::orderBy('id', 'asc')->get(),
      'rulespenyakit' => Rulespenyakit::all(),
      'setting_type_input' => Setting::find(1),
      'values' => Value::orderby('value', 'desc')->get(),
      'min' => Value::where('value', 0)->first(),
      'max' => Value::where('value', 1)->first(),
    ]);
  }

  public function store(Request $request)
  {
    foreach ($request->id_role as $key => $role) {
      Rulespenyakit::where('id', $role)->update([
        'value' => $request->evidance_value[$key]
      ]);
    }

    return redirect()->route('rules.penyakit')->with('status', 'Data Rules Penyakit Berhasil Di Ubah!');
  }
}