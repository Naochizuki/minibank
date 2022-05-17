<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

use App\Http\Controllers\Controller;

class LoginController extends Controller {
    // Buat view
    public function show(){
        return view('/login');
    }

    // Buat login
    public function login() {
        if (Auth::check()) {
            return redirect('/dashboard');
        }else{
            return view('/login');
        }
    }

    public function actionlogin(Request $request) {
        $data = [
            'nama' => $request->input('nama'),
            'password' => $request->input('password')
            // 'nama' => 'admin@admin.com',
            // 'password' => 'admin123',
        ];
        if (Auth::Attempt($data)) {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/register');
        }else{
            return redirect ('dashboard');
        }
    }

    // Buat logout
    public function actionlogout() {
    }
}
