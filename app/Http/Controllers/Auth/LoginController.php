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
        $data = [
            'nama' => $request->input('nama'),
            'password' => Crypt::decryptString($request->input('password')),
        ];
        if (Auth::Attempt($data)){
            $role = DB::table('users')->where('nama', $data["nama"])->value('role');
            if ($role == 'admin'){
                return redirect('/admindashboard');
            }
            elseif($role == 'cust'){
                return redirect('/dashboard');
            }
            // return redirect ('dashboard');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

    // Buat logout
    public function actionlogout() {
        Auth::logout();
        return redirect('/login');
    }
}
