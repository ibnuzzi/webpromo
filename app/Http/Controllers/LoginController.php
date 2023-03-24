<?php

namespace App\Http\Controllers;

use App\Models\promotor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login()
    {
        return view('loginpromotor.loginpromotor');
    }

    public function loginproses(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Harus Diisi',
            'password.required' => 'Password Harus Diisi',
        ]);
        $remember = $request->has('remember') ? true : false;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'], $remember)) {
            $user = Auth::user();
            $user->setRememberToken(Str::random(60));
            return redirect('/beranda')->with('success', 'Berhasil Login');
        }

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'promotor'], $remember)) {
        $user = Auth::user();
        $user->setRememberToken(Str::random(60));
        return redirect('/home')->with('success', 'Berhasil Login');
    }

        return redirect('login')->with('gagal', 'Akun Yang Anda Masukkan Belum Terdaftar');
    }
    public function registerGuest(){
        return view('loginpromotor.registeruser');
    }

    public function register()
    {
        return view('loginpromotor.registerpromotor');
    }

    public function registerUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:150',
            'namamerek' => 'required',
            'fotomerek' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5|max:50',
            'terms' => 'accepted',
        ], [
            'name.required' => 'Nama harus diisi',
            'namamerek.required' => 'Nama Merek Harus Diisi',
            'fotomerek.required' => 'Foto Merek Harus Diisi',
            'fotomerek.image' => 'Foto Merek Harus Berisi File Foto',
            'fotomerek.mimes' => 'Foto Merek Harus Berupa Extensi jpg, png, jpeg',
            'fotomerek.max' => 'Foto Merek Maksimal Berisi 2MB',
            'email.unique' => 'Email sudah dipakai',
            'email.required' => 'Email harus diisi',
            'password.required' => 'Sandi harus diisi',
            'password.min' => 'Password harus diisi minimal 5',
            'password.max' => 'Password harus diisi maksimal 50',
            'terms.accepted' => 'Anda harus menyetujui persyaratan dan ketentuan.',

        ]);

        $data = User::create([
            'name' => $request->name,
            'namamerek' => $request->namamerek,
            'fotomerek' => $request->fotomerek,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'role' => 'promotor',
        ]);

        $user = promotor::create([
            'user_id' => $data->id,
            'namapromotor' => $data->name,
            'namamerek' => $data->namamerek,
            'fotomerek' => $data->fotomerek,
            'email' => $data->email,
        ]);

        if ($request->hasFile('fotomerek')) {
            $request->file('fotomerek')->move('foto_merek/', $request->file('fotomerek')->getClientOriginalName());
            $foto = $request->file('fotomerek')->getClientOriginalName();
            $data->fotomerek = $foto;
            $user->fotomerek = $foto;
            $data->save();
            $user->save();
        }


        return redirect('/login')->with('success', 'Pendaftaran Akun Berhasil');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('homeguest')->with('success', 'Anda sudah Logout');
    }

    public function home(){

        if(Auth()->check() === false){
            return redirect('/login');
        }elseif(Auth::user()->role === 'promotor'){
            return redirect('berandapromotor');
        }elseif(Auth::user()->role === 'admin'){
            return redirect('beranda');
        }elseif(Auth::user()->role === 'guest'){
            return redirect('/');
        }
        return redirect()->back();
    }
}
