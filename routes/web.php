<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
/*
|-----------------------------------------------------------------------
---
| Web Routes
|-----------------------------------------------------------------------
---
14
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
  return view('welcome');
});
Auth::routes();

Route::middleware(['auth', 'user-access:superadmin'])->group(function () 
{
  Route::get('/superadmin/home', [HomeController::class, 'superadminHome'])->name('superadmin.home');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

Route::middleware(['auth', 'user-access:dosen'])->group(function () {
  Route::get('/dosen/home', [HomeController::class, 'dosenHome'])->name('dosen.home');
});

Route::middleware(['auth', 'user-access:mahasiswa'])->group(function () 
{
  Route::get('/mahasiswa/home', [HomeController::class, 'mahasiswaHome'])->name('mahasiswa.home');
});

Route::middleware(['auth', 'user-access:tendik'])->group(function () {
  Route::get('/tendik/home', [HomeController::class, 'tendikHome'])->name('tendik.home');
});

Route::middleware(['auth', 'user-access:adminakademik'])->group(function
() {
  Route::get('/adminakademik/home', [HomeController::class, 'adminakademikHome'])->name('adminakademik.home');
});

Route::middleware(['auth', 'user-access:adminkeuangan'])->group(function
() {
  Route::get('/adminkeuangan/home', [HomeController::class, 'adminkeuanganHome'])->name('adminkeuangan.home');
});

Route::middleware(['auth', 'user-access:direktur'])->group(function () {
  Route::get('/direktur/home', [HomeController::class, 'direkturHome'])->name('direktur.home');
});

Route::middleware(['auth', 'user-access:wakildirektur1'])->group(function () {
  Route::get('/wakildirektur1/home', [HomeController::class, 'wakildirektur1Home'])->name('wakildirektur1.home');
});

Route::middleware(['auth', 'user-access:wakildirektur2'])->group(function () {
  Route::get('/wakildirektur2/home', [HomeController::class, 'wakildirektur2Home'])->name('wakildirektur2.home');
});

Route::middleware(['auth', 'user-access:wakildirektur3'])->group(function () {
  Route::get('/wakildirektur3/home', [HomeController::class, 'wakildirektur3Home'])->name('wakildirektur3.home');
});

Route::middleware(['auth', 'user-access:adminlppm'])->group(function () 
{
  Route::get('/adminlppm/home', [HomeController::class, 'adminlppmHome'])->name('adminlppm.home');
});

Route::middleware(['auth', 'user-access:adminsdm'])->group(function () {
  Route::get('/adminsdm/home', [HomeController::class, 'adminsdmHome'])->name('adminsdm.home');
});