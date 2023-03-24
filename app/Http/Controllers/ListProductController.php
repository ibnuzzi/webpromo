<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\produk;
use App\Models\kategori;
use App\Models\promotor;
use App\Models\fotoproduk;
use App\Models\fotoproduks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListProductController extends Controller
{
    public function promoaktif()
    {
        $data = produk::where('status', 1)->get();
        return view('list.list-promo', compact('data'));
    }

    public function promopending()
    {
        $data = produk::where('status', 0)->whereNull('pesan')->get();
        return view('list.promopending', compact('data'));
    }

    public function detailpromo($id)
{
    $data = produk::find($id);
    $kategori = kategori::find($data->kategoripromo);
    $promotor = promotor::where('user_id', $data->user_id)->first();
    $fotoproduk = fotoproduks::where('produk_id', $data->id)->get();
    // dd($data->user_id);
    return view('list.detailpromo', compact('data', 'kategori', 'promotor', 'fotoproduk'));
}


    public function terimapromo($id)
    {
        $data = produk::where('id', $id)->update([
            'status' => 1,
        ]);
        return redirect('/promoaktif')->with('success', 'Promo Berhasi Diterima');
    }

    public function tolak()
    {
        $data = produk::where('status', 2)->get();
        return view('list.promoditolak', compact('data'));
    }

    public function tolakpromo(Request $request, $id)
    {
        $data = produk::where('id', $id)->update([
            'status' => 2,
            'pesan' => $request->pesan,
        ]);
        return redirect('/ditolak')->with('success', 'Promo Berhasi Ditolak');
    }

    public function hapuspromo($id){
        $data = produk::find($id);
        $data->delete();
        return redirect('promoaktif');
    }
}
