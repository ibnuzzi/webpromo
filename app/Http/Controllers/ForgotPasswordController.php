<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class ForgotPasswordController extends Controller
{
    public function create(){
        return view('loginpromotor.resetpassword');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required','email'
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status = Password::RESET_LINK_SENT
            ? back()->with('status', ($status))
            : back()->withInput($request->only('email'))
                    ->withErrors(['email'=>($status)]);
    }

    public function reset(Request $request){
        return view('loginpromotor.forgotpassword',['request'=>$request]);
    }

    public function rapli(Request $request){
        $request->validate([
            'token' => ['required'],
            'email' => ['required','email'],
            'password' => ['required', 'confirmed'],

        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function($user) use ($request){
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' =>Str::random(60),

                ])->save();

                event(new PasswordReset($user));
            }
        );

        return $status == Password::PASSWORD_RESET
                ? redirect()->route('login')->with('success', ($status))
                : back()->withInput($request->only('email'))
                        ->withErrors(['email' => ($status)]);
    }
}
