<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\banners;
use App\Models\kategori;
use App\Models\promotor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function homeguest(Request $request)
    {
        $cari = $request->cari;
        $data = kategori::all();
        $datak = $data;
        $populer = DB::table('produks')->where('status', 1)
        ->where('namapromo','LIKE','%'.$cari.'%')
        ->where('views', '>=', 5)
        ->where('masapromo','>',Carbon::now())
        ->orderBy('views','desc')
        ->get()
        ->take(5);
        $datab = banners::all();
        $brand = promotor::all();
        $baru = DB::table('produks')
            ->where('namapromo', 'LIKE', '%' . $cari . '%')
            ->where('status', 1)->orderBy('created_at', 'desc')
            ->where('masapromo','>',Carbon::now())
            ->orderBy('views','desc')
            ->get()
            ->take(5);
        $unggul = DB::table('produks')->where('status', 1)
        ->where('namapromo','LIKE','%'.$cari.'%')
        ->where('views', '>=', 100)
        ->orderBy('views','desc')
        ->get()
        ->take(5);
        $kilat = produk::where('status', 1)
        ->where('limit', '<=', 5)
        ->where('namapromo','LIKE','%'.$cari.'%')
        ->get()
        ->take(5);
        // $jumlahpromo = produk::where('user_id','namapromotor')->count();
        return view('home-guest.homeguest', compact('data','datab', 'datak', 'brand', 'populer', 'baru','unggul','kilat'));
    }

    // public function views($id){
    //     $data = produk::find($id);
    //     $data->update([
    //         'views' => $data->views+1
    //     ]);
    // }

    public function detailbrand($brand, $id)
    {
        $banner = promotor::find($id);
        $data = kategori::all();
        $promo = DB::table('produks')->where('namamerek', '=', $brand)->where('status', 1)->get();
        $jumlahpromo = produk::where('namamerek', '=', $brand)->count();
        return view('home-guest.brandguest', compact('banner', 'promo', 'data', 'jumlahpromo'));
    }

    public function faq()
    {
        $data = kategori::all();
        return view('faq.faq', compact('data'));
    }

    public function kontak()
    {
        $data = kategori::all();
        return view('home-guest.kontak', compact('data'));
    }

    public function tentangkami()
    {
        $data = kategori::all();
        return view('home-guest.tentangkami', compact('data'));
    }

    public function promoterpopuler($id)
    {
        $data = produk::where('masapromo', '>=', now())
            ->where('masapromo', '>', now()) // hanya tampilkan produk yang masa promo-nya masih di masa depan
            ->get();

        foreach ($data as $produk) {
            $produk->views += 1;
            $produk->save();
        }
    }

}
