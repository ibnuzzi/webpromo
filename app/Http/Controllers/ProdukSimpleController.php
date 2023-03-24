<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukSimpleController extends Controller
{
    // public function produksimple($kategori){
    //     $data = kategori::find($kategori);
    //     return view('produksimple.produksimple', compact('data'));
    // }

    public function detailkategori($kategori, $id){
        $data = kategori::find($id);
        $kategori = kategori::all();
        // dd($data);
        $promo = DB::table('produks')->where('kategoripromo','=',$id)->where('status',1)->get();
        // dd($promo);
        return view('produksimple.produksimple', compact('data','promo','kategori'));
    }

    public function tampilpopuler(Request $request) {
        $cari = $request->input('cari');
        $kategori = kategori::all();
        $query = produk::query();
        if ($request->has('category')) {
            $category = $request->input('category');
            $query->where('category', $category);
        }
        $products = $query->get();
        $data = produk::where('status', 1)
                    ->where('namapromo', 'LIKE', '%'.$cari.'%')
                    ->paginate(4);
        if ($request->ajax()) {
            return view('home-guest.tampilpopuler-ajax', compact('data'));
        }
        return view('home-guest.tampilpopuler', compact('data', 'kategori', 'query'));
    }
    public function tampilterbaru(){
        $kategori = kategori::all();
        $data = produk::where('status', 1)->get();
        return view('home-guest.tampilterbaru', compact('data', 'kategori'));
    }
    public function promoterbaru(){
        $promo = produk::where('status', 1)
        ->where('masapromo', '>', now())->get();
        return view('home-guest.homeguest', compact('promo'));
    }
    public function filter(Request $request){
        $cari = $request->cari;
        $kategori = kategori::all();
        $active = $request->kategori;
        if($request->pilihan==='terbaru'){
            $status=1;
            $data = produk::where('status', 1)->latest()
            ->where('namapromo','LIKE','%'.$cari.'%')->get();
            return view('home-guest.filter', compact('data','status','kategori','active'));
        }
        if ($request->pilihan==='terpopuler'){
            $status=2;
            $data = produk::where('status', 1)->orderBy('views', 'desc')
            ->where('namapromo','LIKE','%'.$cari.'%')->get();
            return view('home-guest.filter', compact('data','status','kategori','active'));

        }
        if ($request->pilihan==='kilat'){
            $status=3;
            $data = kilat::where('status', 1)->orderBy('views', 'desc')->get();
            return view('home-guest.filterkilat', compact('data','status','kategori','active'));
        }
        if ($request->kategori){
            $status=4;
            $data = produk::where('kategoripromo', $request->kategori)->get();

            return view('home-guest.filter', compact('data','status','kategori','active'));
        }
    }

}
