<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;
use App\Models\fotoproduks;
use App\Models\kilat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function gunakanpromo($id){
        $promo = produk::find($id);
        $guest_id = Auth::user()->id;

        // check if promo has been used by this guest
        if (strpos($promo->used_by_guest, $guest_id) !== false) {
            return redirect()->route('detpromo', ['id' => $id])->with('error', 'Anda sudah menggunakan promo ini sebelumnya.');
        }

        // check if promo has reached its limit
        if ($promo->limit <= 0) {
            return redirect()->route('detpromo', ['id' => $id])->with('error', 'Promo ini sudah mencapai batas penggunaan.');
        }

        // update promo limit and add guest id to used_by_guest column
        $promo->update([
            'limit' => $promo->limit - 1,
            'used_by_guest' => $promo->used_by_guest ? $promo->used_by_guest . ',' . $guest_id : $guest_id
        ]);

        return redirect()->route('detpromo', ['id' => $id])->with('success', 'Promo Berhasil Digunakan');
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
