<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;
use App\Models\kilat;
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
        $kategori = Kategori::all();
        $query = Produk::query();
        if ($request->has('category')) {
          $category = $request->input('category');
          $query->where('category', $category);
        }
        $products = $query->get();
        $data = Produk::where('status', 1)
                  ->where('namapromo', 'LIKE', '%'.$cari.'%')
                  ->paginate(4);
        if ($request->ajax()) {
          return response()->json([
            'view' => view('home-guest.tampilpopuler-ajax', compact('data'))->render(),
          ]);
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

    public function filter(Request $request)
{
    $cari = $request->cari;
    $items = Kategori::all();
    $active = $request->kategori;
    $status = null;
    $data = null;

    $query = Produk::where('namapromo', 'LIKE', '%' . $cari . '%')->where('status', 1);

    if ($request->has('kategori')) {
        $kategori = $request->kategori;
        if (is_array($kategori)) {
            $query->whereIn('kategoripromo', $kategori);
        } else {
            $query->where('kategoripromo', $kategori);
        }
    }

    if ($request->has('pilihan') && $request->pilihan === 'terbaru') {
        $status = 1;
        $query->latest();
    } elseif ($request->has('pilihan') && $request->pilihan === 'terpopuler') {
        $status = 2;
        $query->orderBy('views', 'desc');
    } elseif ($request->has('pilihan') && $request->pilihan === 'kilat') {
        $status = 3;
        $data = Kilat::where('status', 1)->orderBy('views', 'desc')->paginate(4);
    }

    $data = $query->paginate(4);
    $terbaruCount = Produk::where('namapromo', 'LIKE', '%' . $cari . '%')->where('status', 1)->count();

    return view('home-guest.filter', [
        'data' => $data,
        'status' => $status,
        'items' => $items,
        'active' => $active,
        'terbaruCount' => $terbaruCount
    ]);
}


}
