<?php

namespace App\Http\Controllers;

use App\Models\Hama;
use App\Models\Kondisihama;
use App\Models\Ruleshama;
use App\Models\Setting;
use App\Models\Value;
use Illuminate\Http\Request;

class RuleshamaController extends Controller
{
  public function index()
  {
    return view('rules.hama', [
      'title' => 'Rules Hama',
      'hama' => Hama::orderBy('code', 'asc')->get(),
      'ruleshama' => Ruleshama::all(),
      'setting_type_input' => Setting::find(1),
      'values' => Value::orderby('value', 'desc')->get(),
      'min' => Value::where('value', 0)->first(),
      'max' => Value::where('value', 1)->first(),
    ]);
  }

  public function store(Request $request)
  {
    foreach ($request->id_role as $key => $role) {
      Ruleshama::where('id', $role)->update([
        'value' => $request->evidance_value[$key]
      ]);
    }
    return redirect()->route('rules.hama')->with('status', 'Data Rules Hama Berhasil Di Ubah!');
  }
}