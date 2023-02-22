<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(){
        return view('layout.login');
    }

    public function loginproses(Request $request){
        $this->validate($request, [
            'email' => 'required|exists:users,email',
            'password' => 'required|min:6',
        ],[
            'email.required' => 'Masukkan Email Anda !!',
            'email.exists' => 'Email Yang Anda Masukkan Salah !!',
            'password.required' => 'Masukkan Kata Sandi Anda !!',
            'password.min' => 'Password Minimal 6 Huruf !!',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Admin'])) {
            return redirect('/');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'promotor    '])) {
            return redirect('/dashboard');
        }
        
        return redirect('login')->with('password','Password Salah');
    }

}
