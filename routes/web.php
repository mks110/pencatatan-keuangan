<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::get('/kategori', [KategoriController::class, 'index']);

Route::resource('/kategori', KategoriController::class);
Route::resource('/transaksi', TransaksiController::class);

Route::get('/rekap', [RekapController::class, 'index']);