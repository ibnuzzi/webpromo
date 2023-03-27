<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class PendingController extends Controller
{

    // Menampilkan produk belum kadaluarsa
    public function pending(Request $request)
    {
        $keyword = $request->cari;
        $data = produk::where('status', 0)
            ->where('namapromo', 'LIKE', '%' . $request->cari . '%')
            ->whereNull('pesan')
            ->where('user_id', auth()->id())
            ->where('masapromo', '>=', now())
            ->paginate(8);

            $data->appends(['cari' => $keyword]);

        return view('daftarpromo.promopending', compact('data'));
    }

    public function diterima(Request $request)
{
    $keyword = $request->cari;
    $data = produk::where('status', 1)
    ->where('namapromo', 'LIKE', '%' . $request->cari . '%')
    ->where('masapromo', '>=', now())
    ->where('user_id', auth()->id())
    ->paginate(1);

    $data->appends(['cari' => $keyword]);

    return view('daftarpromo.promoditerima', compact('data'));
}

    public function ditolak(Request $request)
    {
        $data = produk::where('status', 2)
        ->where('namapromo', 'LIKE', '%' . $request->cari . '%')
        ->whereNotNull('pesan')
        ->where('user_id', auth()->id())
        ->paginate(8)
        ->get();

        $data->appends(['cari' => $keyword]);

        return view('daftarpromo.promoditolak', compact('data'));
    }

    public function promoexpired(Request $request)
    {
        $keyword = $request->cari;
        $data = produk::where('masapromo', '<', now())
        ->where('namapromo', 'LIKE', '%' . $request->cari . '%')
        ->where('user_id', auth()->id())
        ->get();

        $data->appends(['cari' => $keyword]);

        return view('daftarpromo.promoexpired', compact('data'));
    }
}
