<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Crypt;

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
    
    //backend login logic
    public function actionlogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $role = DB::table('users')->where('email', $credentials["email"])->value('role');
            if ($role == 'admin'){
                return redirect('/admin/dashboard');
            }elseif($role == 'nasabah'){
                return redirect('/nasabah/dashboard');
            }elseif($role == 'cs'){
                return redirect('/cs/dashboard');
            }elseif($role == 'teller'){
                return redirect('/teller/dashboard');
            }
        }else{
            return back()->with([
                'loginError' => 'Email atau Password salah !!'
            ]);
        }
    }

    // Buat logout
    public function actionlogout() {
        Auth::logout();
        return redirect('/login');
    }
}
