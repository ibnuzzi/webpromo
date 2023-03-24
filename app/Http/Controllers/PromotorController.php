<?php

namespace App\Http\Controllers;

use App\Models\promotor;
use Illuminate\Http\Request;

class PromotorController extends Controller
{
    public function tabelpromotor(Request $request){
        $keyword = $request->cari;
        $data = promotor::orderBy('namapromotor', 'asc')->paginate(5);
        return view('promotor.tabel-promotor',compact('data'));
    }

    public function hapuspromotor($id){
        $data = promotor::find($id);
        $data->delete();
        return redirect('tabelpromotor')->with('success', 'Data Berhasi Dihapus');
    }
}
