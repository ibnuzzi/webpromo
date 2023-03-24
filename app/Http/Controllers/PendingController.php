<?php

namespace App\Http\Controllers;

use App\Models\produk;

class PendingController extends Controller
{

    // Menampilkan produk belum kadaluarsa
    public function pending()
    {
        $data = produk::where('status', 0)
            ->whereNull('pesan')
            ->where('user_id', auth()->id())
            ->where('masapromo', '>=', now())
            ->paginate(8);

        return view('daftarpromo.promopending', compact('data'));
    }

    public function diterima()
    {
        $data = produk::where('status', 1)
        ->where('masapromo', '>=', now())
        ->where('user_id', auth()->id())->paginate(8);
        return view('daftarpromo.promoditerima', compact('data'));
    }

    public function ditolak()
    {
        $data = produk::where('status', 2)->whereNotNull('pesan')->where('user_id', auth()->id())->get();
        return view('daftarpromo.promoditolak', compact('data'));
    }

    public function promoexpired()
    {
        $data = produk::where('masapromo', '<', now())->get();
        return view('daftarpromo.promoexpired', compact('data'));
    }
}
