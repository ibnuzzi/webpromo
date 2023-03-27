<?php

use App\Models\User;
use App\Models\produk;
use App\Models\kategori;
use App\Models\promotor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\KilatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PromotorController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\ProdukSimpleController;
use App\Http\Controllers\DeskripsiFotoController;
use App\Http\Controllers\ForgotPasswordController;

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
//loginadmin

Route::get('/home',[LoginController::class, 'home'])-> name('home');
Route::get('/profiladmin',[AdminController::class, 'profiladmin'])->name('profiladmin');
// Route::get('/loginadmin',[AdminController::class, 'loginadmin']) -> name('loginadmin');
// Route::post('/loginadminproses',[AdminController::class, 'loginadminproses']) -> name('loginadminproses');
Route::get('/logout',[AdminController::class, 'logout']) -> name('logout');

//loginPromotor
Route::get('/registerGuest', [LoginController::class, 'registerGuest']);
Route::post('/registerPengunjung', [LoginController::class, 'registerPengunjung']);
Route::get('/login',[LoginController::class, 'login']) -> name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses']) -> name('loginproses');
Route::get('/register',[LoginController::class, 'register']) -> name('register');
Route::post('/registerUser',[LoginController::class, 'registerUser']) -> name('registerUser');
Route::get('/logout',[LoginController::class, 'logout']) -> name('logout');

Route::get('/lupapassword', [ForgotPasswordController::class, 'create'])->name('password.create');
Route::post('/lupapassword', [ForgotPasswordController::class, 'store'])->name('password.store');

Route::get('/mengaturulangpassword{token}', [ForgotPasswordController::class, 'reset'])->name('password.reset');
Route::post('/mengaturulangpassword', [ForgotPasswordController::class, 'rapli'])->name('password.sendreset');


Route::get('/profile',[ProfileController::class, 'profile']) -> name('profile');
Route::post('/updateprofile/{id}',[ProfileController::class, 'updateprofile']);
Route::get('/gantipassword', [ProfileController::class, 'gantipassword']);
Route::post('/updatepaswordpromotor', [ProfileController::class, 'updatepasswordpromotor']);

Route::get('/search', 'ProdukSimpleController@index')->name('search');

//HomeGuest
Route::get('/',[GuestController::class,'homeguest'])->name('homeguest');
Route::get('/promotopuler/{id}',[GuestController::class, 'promoterpopuler']);
Route::get('/detailbrand/{brand}/{id}', [GuestController::class,'detailbrand']);

//detailproduk
Route::get('/produksimple/{kategori}/{id}',[ProdukSimpleController::class,'detailkategori'])->name('detailkategori');
Route::get('/filter',[ProdukSimpleController::class,'filter'])->name('filter');
Route::get('/tampilpopuler',[ProdukSimpleController::class,'tampilpopuler'])->name('tampilpopuler');
Route::get('/tampilterbaru',[ProdukSimpleController::class, 'tampilterbaru']) -> name('promoterbaru');
//tentangkami
Route::get('/tentangkami', function(){
    return view('home-guest.tentangkami');
});
//kontak
Route::get('/kontak', [GuestController::class, 'kontak']);
Route::get('/faq', [GuestController::class, 'faq']);
Route::get('/tentangkami', [GuestController::class, 'tentangkami']);
Route::get('homeguest',[GuestController::class,'homeguest'])->name('homeguest');


// MIDDLEWARE PROMOTOR
Route::middleware(['auth:sanctum','verified','PromotorMiddleware'])->group(function(){
    Route::get('/berandapromotor', [ProdukController::class, 'listpromo'])->name('listpromo');

    //daftarpromo
    Route::get('/promopending',[PendingController::class, 'pending']);
    Route::get('/promoditerima',[PendingController::class, 'diterima']);
    Route::get('/promoditolak', [PendingController::class, 'ditolak']);
    Route::get('/promoexpired', [PendingController::class, 'promoexpired']);

    // Edit Gambar Modal
    Route::put('/editfotoproduk/{id}',[ProdukController::class, 'editfotoproduk'])->name('editfotoproduk');
    // Hapus Gambar
    Route::get('/deletefotoproduk/{id}',[ProdukController::class, 'deletefotoproduk'])->name('deletefotoproduk');
    // Tambah Gambar
    Route::post('/insertfotoproduk',[ProdukController::class, 'insertfotoproduk'])->name('insertfotoproduk');

    Route::get('/deskripsifoto/{id}',[DeskripsiFotoController::class, 'deskripsifoto'])->name('deskripsifoto');

    //promotor menambahkan promo
    Route::post('/insertpromo', [ProdukController::class, 'insertpromo'])->name('insertpromo');
    Route::get('/tambahpromo',[ProdukController::class, 'tambahpromo'])->name('tambahpromo');
    Route::get('/editpromo/{id}',[ProdukController::class, 'tampilpromo'])->name('editpromo');
    Route::post('/updatepromo/{id}',[ProdukController::class, 'editpromo'])->name('editpromo');
    Route::get('/deletepromo/{id}',[ProdukController::class, 'deletepromo'])->name('deletepromo');

    //promo kilat promotor
    //kilat
    Route::post('/insertkilat', [KilatController::class, 'insertkilat'])->name('insertkilat');
    Route::get('/tambahkilat',[KilatController::class, 'tambahkilat'])->name('tambahkilat');
    Route::get('/editkilat/{id}',[KilatController::class, 'editkilat'])->name('editkilat');
    Route::post('/updatekilat/{id}',[KilatController::class, 'editkilat'])->name('updatekilat');
    Route::get('/tampilkilat/{id}',[KilatController::class, 'tampilkilat'])->name('tampilkilat');
    Route::get('/deletekilat/{id}',[KilatController::class, 'deletekilat'])->name('deletekilat');
});


// MIDDLEWARE ADMIN
Route::middleware(['auth:sanctum','verified','AdminMiddleware'])->group(function(){
    Route::get('/beranda', [AdminController::class, 'beranda'])->name('admin');

        //Tabel Promotor
        Route::get('/tabelpromotor',[PromotorController::class,'tabelpromotor'])->name('tabelpromotor');
        Route::get('/hapuspromotor/{id}',[PromotorController::class,'hapuspromotor'])->name('hapus.promotor');

        //Tabel Banner
        //read
        Route::get('/tabelbanner',[BannerController::class,'tabelbanner'])->name('tabel.banner');
        //create
        Route::get('/tambahbanner/{id}',[BannerController::class,'tambahbanner'])->name('tambah.banner');
        //update
        Route::get('/editbanner/{id}',[BannerController::class,'editbanner'])->name('edit.banner');
        Route::put('/updatebanner/{id}',[BannerController::class,'updatebanner'])->name('updatebanner');

        //Tabel Kategori
        //read
        Route::get('/tabelkategori',[KategoriController::class,'tabelkategori'])->name('tabel.kategori');
        //create
        Route::get('/tambahkategori',[KategoriController::class,'tambahkategori'])->name('tambah.kategori');
        Route::post('/storekategori',[KategoriController::class,'storekategori'])->name('store.kategori');
        //update
        Route::get('/editkategori/{id}',[KategoriController::class,'editkategori'])->name('edit.kategori');
        Route::put('/updatekategori/{id}',[KategoriController::class,'updatekategori'])->name('updatekategori');
        //delete
        Route::get('/hapuskategori/{id}',[KategoriController::class,'hapuskategori'])->name('hapus.kategori');

        Route::get('/tabel-grafik', function(){
            return view('grafik.tabel-grafik');
        });

        Route::get('/produk', function(){
            return view('produk.produk');
        });

        //adminapproval
        Route::get('/promoaktif', [ListProductController::class, 'promoaktif'])->name('promoaktif');
        Route::get('/promopendingpromotor', [ListProductController::class, 'promopending'])->name('promopending');
        Route::get('/ditolak', [ListProductController::class, 'tolak'])->name('ditolak');
        Route::get('/detailpromopromotor/{id}', [ListProductController::class, 'detailpromo'])->name('detailpromo');
        Route::post('/promoditerima/{id}', [ListProductController::class, 'terimapromo'])->name('terimapromo');
        Route::put('/promoditolak/{id}', [ListProductController::class, 'tolakpromo'])->name('tolakpromo');
});

Route::get('/detpromo/{id}',[DeskripsiFotoController::class, 'detpromo'])->name('detpromo');
Route::post('/gunakanpromo/{id}', [DeskripsiFotoController::class, 'gunakanpromo']);
