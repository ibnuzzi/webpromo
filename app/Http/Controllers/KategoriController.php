<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{

    public function tabelkategori(Request $request){
        $keyword = $request->cari;
        $data = kategori::where('kategori', 'LIKE', '%' . $request->cari . '%')->paginate(3);
        return view('kategori.tabel-kategori',['data' =>$data]);
    }

    public function tambahkategori(){
        $data = kategori::all();
        return view('kategori.tambah-kategori',['data' => $data]);
    }

    public function storekategori(Request $request){

        $data = kategori::create([
            'kategori'=>$request->kategori,
            'fotoproduk' =>$request->fotoproduk
        ]);

        if($request->hasFile('fotoproduk')){
            $request->file('fotoproduk')->move('fotoproduk/',$request->file('fotoproduk')->getClientOriginalName());
            $data->fotoproduk = $request->file('fotoproduk')->getClientOriginalName();
        }
        $data->save();

        return redirect()->route('tabel.kategori')->with('success', 'Data Berhasi DiTambahkan');
    }
    public function editkategori($id){
        $data = kategori::Find($id);
        return view('kategori.edit-kategori',['data' => $data]);
    }

    public function updatekategori(Request $request,$id){
        $data = kategori::Find($id);
        if($request->hasFile('fotoproduk')){
            //hapus foto lama
            Storage::delete($data->fotoproduk);
            //simpan foto baru
            $request->file('fotoproduk')->move('fotoproduk/',$request->file('fotoproduk')->getClientOriginalName());
            $data->fotoproduk = $request->file('fotoproduk')->getClientOriginalName();
        }else{
            $data->fotoproduk = $request->default;
        }
        $data->kategori = $request->kategori;
        $data->save();
        return redirect('tabelkategori')->with('success', 'Data Berhasi DiUpdate');
    }
    public function hapuskategori($id){
        $data = kategori::find($id);
        $data->delete();
        return redirect('tabelkategori');
    }
}
