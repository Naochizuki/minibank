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
        // dd($request);
        // $data = [
        //     'email' => $request->input('email'),
        //     'password' => 'password',
        // ];
        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);
        $data = $request->only('email', 'password');
        if(Auth::attempt($data)){
            $role = DB::table('users')->where('email', $data["email"])->value('role');
            // $users = DB::table('users')->where('nama', $data['nama'])->get();
            // $user = $users[0]->nama;
            // $request->session()->regenerate();
            if ($role == 'admin'){
                return redirect('/admin/dashboard');
                // return redirect()->intended('admin/dashboard')->withSucess('Masuk');
            }elseif($role == 'nasabah'){
                return redirect('/nasabah/dashboard');
            }elseif($role == 'cs'){
                return redirect('/cs/dashboard');
            }elseif($role == 'teller'){
                return redirect('/teller/dashboard');
            }
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/register');
        }
    }

    // Buat logout
    public function actionlogout() {
        Auth::logout();
        return redirect('/login');
    }
}
