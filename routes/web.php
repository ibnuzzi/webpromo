<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

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

Route::get('/beranda', function () {
    return view('admin-home.beranda');
});

Route::get('/list-promo', function(){
    return view('list.list-promo');
});

Route::get('/detail-promo', function(){
    return view('detail.detail-promo');
});

Route::get('/tabel-promotor', function(){
    return view('promotor.tabel-promotor');
});

Route::get('/tabel-grafik', function(){
    return view('grafik.tabel-grafik');
});

Route::get('/produk', function(){
    return view('produk.produk');
});

Route::get('/promo-ditolak', function(){
    return view('ditolak.promo-ditolak');
});

Route::get('/tabel-kilat', function(){
    return view('kilat.tabel-kilat');
});

Route::get('/tabel-terpopuler', function(){
    return view('populer.tabel-terpopuler');
});

Route::get('/promo-terbaru', function(){
    return view('terbaru.promo-terbaru');
});

Route::get('/tabel-unggulan', function(){
    return view('unggulan.tabel-unggulan');
});

//Tabel Kategori
//read
Route::get('/tabelkategori',[KategoriController::class,'tabelkategori'])->name('tabel.kategori');
//create
Route::get('/tambahkategori',[KategoriController::class,'tambahkategori'])->name('tambah.kategori');
Route::post('/storekategori',[KategoriController::class,'storekategori'])->name('store.kategori');
//update
Route::get('/editkategori/{id}',[KategoriController::class,'editkategori'])->name('edit.kategori');
Route::put('/updatekategori/{id}',[KategoriController::class,'updatekategori'])->name('update.kategori');
//delete
Route::get('/hapuskategori/{id}',[KategoriController::class,'hapuskategori'])->name('hapus.kategori');

