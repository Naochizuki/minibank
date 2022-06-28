<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller {
    // Buat view
    public function show() {
        return view('/register');
    }

    // Buat register
    public function store(Request $request) {
        dd($request);
        $dataUsers= [
            'nama' => $request->input('nama'),
            'password' => Hash::make($request->input('password')),
            'email' => $request->input('email'),
            'role'=> "cust"
        ];
        $id=DB::table('users')->insertGetId($dataUsers);
        $dataNasabah=[
            'id_user' => $id,
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'nik' => $request->input('nik'), 
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'nama_ibu' => $request->input('nama_ibu'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'no_telp' => $request->input('no_telp')
        ];
        DB::table('nasabah')->insert($dataNasabah);
        return redirect('/login');
    }
}
