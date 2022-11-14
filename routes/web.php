<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\LoginController;

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

//Route Beranda
Route::get('/', [BerandaController::class, 'index']);
Route::get('/comingsoon', [BerandaController::class, 'comingsoon']);

//Route Akses & Daftar
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [LoginController::class, 'register']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    //Route Admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('produk', ProdukController::class);

    Route::resource('pelanggan', PelangganController::class);

    Route::resource('testimoni', TestimoniController::class);

    Route::resource('pembelian', PembelianController::class);

    Route::resource('kategori', KategoriController::class);

});