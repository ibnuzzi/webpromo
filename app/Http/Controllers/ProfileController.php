<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kategori;
use App\Models\promotor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = User::all();
        $datak = kategori::all();
        return view('homepromotor.profile',compact('data','datak'));
    }

    public function updateprofile(Request $request, $id)
    {
        $this->validate($request,[
            'fotoprofil' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ],[
            'fotoprofil.required' => 'Foto Profil Foto Harus Diisi',
            'fotoprofil.image' => 'Foto Profil Foto Harus Berisi File Foto',
            'fotoprofil.mimes' => 'Foto Profil Foto Harus Berupa Extensi jpg, png, jpeg',
            'fotoprofil.max' => 'Foto Profil Foto Maksimal Berisi 2MB',
        ]);

        $data = User::find($id);
        $data->update($request->all());

        if ($request->hasFile('fotoprofil')) {
            $file = $request->file('fotoprofil');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('fotoprofil/', $filename);
            $data->fotoprofil = $filename;
            $data->save();
        }
        return redirect('profile')->with('success', 'Foto Profile Berhasil DiUpdate');
    }

    public function gantipassword(){

        return view('homepromotor.gantipassword');
    }


    public function updatepasswordpromotor(Request $request)
{
    $request->validate([
        'current_password' => [
            'required',
            function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    return $fail(__('Kata sandi yang anda masukkan saat ini salah!.'));
                }
            },
        ],
        'password' => 'required|min:6|max:100|confirmed',
        'password_confirmation' => 'required'
    ], [
        'current_password.required' => 'Kata sandi lama harus diisi!',
        'password.required' => 'Kata sandi baru harus diisi!',
        'password.min' => 'Kata sandi harus terdiri dari minimal 6 karakter!',
        'password.confirmed' => 'Konfirmasi kata sandi harus sama dengan kata sandi baru!',
        'password_confirmation.required' => 'Konfirmasi kata sandi harus diisi!',
    ]);

    $data = User::find(Auth::user()->id);
    $data->update([
        'password' => Hash::make($request->password)
    ]);

    return redirect()->route('profile')->with('success', 'Kata Sandi Berhasil Diupdate');
}

}
