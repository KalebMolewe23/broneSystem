<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Auth_user extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function actionregister(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');

        return redirect('/auth');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect()->back();
        }
    }
}
