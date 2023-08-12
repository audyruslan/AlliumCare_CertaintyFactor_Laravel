<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiagnosahamaController;
use App\Http\Controllers\DiagnosapenyakitController;
use App\Http\Controllers\GejalahamaController;
use App\Http\Controllers\GejalapenyakitController;
use App\Http\Controllers\HamaController;
use App\Http\Controllers\HasilhamaController;
use App\Http\Controllers\HasilpenyakitController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KondisihamaController;
use App\Http\Controllers\KondisipenyakitController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RuleshamaController;
use App\Http\Controllers\RulespenyakitController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => ['level:admin,user', 'auth']], function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

  // Route Hama
  Route::resource('/hama', HamaController::class);
  Route::resource('/gejalahama', GejalahamaController::class);
  Route::resource('/kondisihama', KondisihamaController::class);

   // Route Penyakit
  Route::resource('/penyakit', PenyakitController::class);
  Route::resource('/gejalapenyakit', GejalapenyakitController::class);
  Route::resource('/kondisipenyakit', KondisipenyakitController::class);

  // Route Rules
  Route::get('/rules-hama', [RuleshamaController::class, 'index'])->name('rules.hama');
  Route::post('/store-ruleshama', [RuleshamaController::class, 'store'])->name('ruleshama.store');
  Route::get('/rules-penyakit', [RulespenyakitController::class, 'index'])->name('rules.penyakit');
  Route::post('/store-rulespenyakit', [RulespenyakitController::class, 'store'])->name('rulespenyakit.store');

  Route::get('/hasil-penyakit', [HasilpenyakitController::class, 'index'])->name('riwayatdiagnosa-penyakit');

  Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
  Route::post('/setting', [SettingController::class, 'save'])->name('setting.save');
  Route::post('/value', [SettingController::class, 'saveValue'])->name('value.save');
  Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
  Route::patch('/profile/{user}', [DashboardController::class, 'profile_update'])->name('profile.update');

  Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['level:admin', 'auth']], function () {
  Route::resource('/user', UserController::class);
}); 
 
Route::middleware(['guest'])->group(function () {
  Route::get('/login', [DashboardController::class, 'login'])->name('login');
  Route::post('/login-process', [DashboardController::class, 'login_process'])->name('login_process');
});

Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/about', [DashboardController::class, 'about'])->name('about');
// Route Post
Route::get('/post', [PostController::class, 'index'])->name('post-keterangan');

  // Route Diagnosa Hama
  Route::get('/diagnosa-hama', [DiagnosahamaController::class, 'diagnosa_hama'])->name('diagnosa-hama');
  Route::post('/diagnosa-hama', [DiagnosahamaController::class, 'diagnosa'])->name('hasil-diagnosahama');

  // Route Diagnosa Penyakit
  Route::get('/diagnosa-penyakit', [DiagnosapenyakitController::class, 'diagnosa_penyakit'])->name('diagnosa-penyakit');
  Route::post('/diagnosa-penyakit', [DiagnosapenyakitController::class,
  'diagnosa'])->name('hasil-diagnosapenyakit');

    // Route Hasil Diagnosa Hama
  Route::get('/hasil-hama', [HasilhamaController::class, 'index'])->name('riwayatdiagnosa-hama');
  Route::get('/hasil-hama/{hama}', [HasilhamaController::class, 'show'])->name('hasil-hama');
  Route::delete('/hasil-hama/{hama}', [HasilhamaController::class, 'destroy'])->name('hapus-hasilhama');

  // Route Hasil Diagnosa Penyakit
  Route::get('/hasil-penyakit', [HasilpenyakitController::class, 'index'])->name('riwayatdiagnosa-penyakit');
  Route::get('/hasil-penyakit/{penyakit}', [HasilpenyakitController::class, 'show'])->name('hasil-penyakit');
  Route::delete('/hasil-penyakit/{penyakit}', [HasilpenyakitController::class, 'destroy'])->name('hapus-hasilpenyakit');
