<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Nasabah;

class CSController extends Controller
{
    // view CS
    public function showCsDashboard() {
        return view('Dashboard.cs page.cs dashboard');
    }

    public function showCsTambahAkun() {
        return view('Dashboard.cs page.cs add');
    }

    public function showCsTambahRekening() {
        return view('Dashboard.cs page.cs add account');
    }

    public function createCsNasabah(Request $request) {
        $request->validate([
            'nama' => 'required|max:255|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'alamat' => 'required|min:2',
            'no_telp' => 'required',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
            'nama_ibu' => 'required',
            'tgl_lahir' => 'required'
        ]);
        $encrypted = bcrypt('password');

        $user_id = User::insertGetId([
            'nama' =>  $request->input('nama'),
            'role' => 'nasabah',
            'email' => $request->input('email'),
            'password' => $encrypted,
        ]);

        Nasabah::insert([
            'id_user' => $user_id,
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'nik' => $request->input('nik'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'nama_ibu' => $request->input('nama_ibu'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'no_telp' => $request->input('no_telp'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        return redirect()->action([AdminController::class, 'showAdminNasabah    ']);
    }
}
