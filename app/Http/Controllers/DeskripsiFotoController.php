<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;
use App\Models\fotoproduks;
use App\Models\kilat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeskripsiFotoController extends Controller
{
    public function deskripsifoto($id){
        $promo = produk::find($id);
        $fotoproduk = fotoproduks::where('produk_id', $promo->id)->get();
        // dd($fotoproduk);
        $kategori = kategori::where('id', $promo->id)->get();
        return view ('homepromotor.deskripsifoto', compact ('promo','fotoproduk','kategori'));
    }

    public function detpromo($id){
        $data1 = kategori::all();
        $promo = produk::find($id);
        // dd($promo);
        $fotoproduk = fotoproduks::where('produk_id', $promo->id)->get();
        // $data = kategori::all();
        $apa = produk::where('kategoripromo',$promo->kategoripromo)->where('status',1)->get();
        $promo->update([
        'views' => $promo->views+1
        ]);
        return view ('home-guest.detpromo', compact ('promo', 'fotoproduk','apa','data1'));
    }

    public function detkilat($id){
        $promo = kilat::find($id);
        return view ('home-guest.detpromo', compact ('promo'));
    }

    public function detpopuler($id){
        $data = produk::find($id);
        return view ('home-guest.detpopuler', compact ('data'));
    }

    public function detpromokilat($id){
        $data = produk::find($id);
        $data->update([
            'views' => $data -> views+1
        ]);
        return view ('home-guest.detpromokilat', compact ('data'));
    }

}
