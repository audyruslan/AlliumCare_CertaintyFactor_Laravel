<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Value;
use App\Models\Role;

class SettingController extends Controller
{
    public function index()
    {
        // dd(Setting::where('id', 1)->get());
        return view('setting', [
            'title' => 'Setting',
            'setting' => Setting::find(1),
            'values' => Value::orderby('value', 'desc')->get(),
            'count_value' => Value::count(),
        ]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // dd($request->all());

        $setting = Setting::find(1);
        $setting->title = $request->title;
        $setting->description = $request->description;

        $setting->save();

        return redirect()->route('setting.index');
    }

    public function saveValue(Request $request)
    {
        foreach ($request->name as $key => $name) {
            $valueId = $request->value_id[$key] ?? null;

            if ($valueId) {
                Value::where('id', $valueId)->update([
                    'name' => $name,
                    'value' => $request->value[$key],
                ]);
            } else {
                Value::create([
                    'name' => $name,
                    'value' => $request->value[$key],
                ]);
            }
        }

        $setting = Setting::find(1);
        $setting->input_type = $request->input_type;
        $setting->save();

        return redirect()->route('setting.index');
    }
}