<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Hama;
use App\Models\Hasilhama;
use App\Models\Hasilpenyakit;
use App\Models\User;
use App\Models\Penyakit;
use App\Models\Setting;
use App\Models\Value;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard',[
            'title' => 'Dashboard',
            'count_user' => User::count(),
            'count_hama' => Hama::count(),
            'count_penyakit' => Penyakit::count(),
            'count_value' => Value::count(),
            'hamas' => Hama::all(),
            'hasilhamas' => Hasilhama::orderby('id','desc')->get(),
            'hasilpenyakits' => Hasilpenyakit::orderby('id','desc')->get(),
            'penyakits' => Penyakit::all(),
        ]);
    }

    public function home()
    {
        return view('index',[
            'title' => 'Sipagung - Sistem Pakar Diagnosa Hama & Penyakit Jagung',
            'setting' => Setting::find(1),
        ]);
    } 

    public function about()
    {
        return view('about',[
            'title' => 'Sipagung About - Sistem Pakar Diagnosa Hama & Penyakit Jagung',
            'settings' => Setting::orderby('id', 'asc')->get()
        ]);
    }

    public function login()
    {
        return view('login',[
            'title' => 'Login',
        ]);
    }

    public function login_process(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required|min:6|'
        ]);

        if(Auth::attempt($credentials)){
            return redirect('/dashboard');
        }
        return redirect('/login')->with('status','Login Gagal!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function profile()
    {
        $user = User::find(auth()->user()->id);
        return view('profile',[
            'title' => 'Profile',
            'user' => $user,
        ]);
    }

    public function profile_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required|min:6|confirmed',
            // 'repassword' => 'required|same:password',
        ]);

        // dd($request->all());

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/profile')->with('status','Profile Berhasil Diupdate!');

    }
}
