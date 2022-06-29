<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Nasabah;
use App\Models\Rekening;
use Faker\Factory as Faker;
use Carbon\Carbon;

class CSController extends Controller
{
    // view CS
    public function showCsDashboard()
    {
        return view('Dashboard.cs page.cs dashboard');
    }

    public function showCsTambahAkun()
    {
        return view('Dashboard.cs page.cs add');
    }

    public function showCsTambahRekening()
    {
        $nasabahs = Nasabah::get();
        return view('Dashboard.cs page.cs add account', compact('nasabahs'));
    }

    public function createCsNasabah(Request $request)
    {
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
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
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
            'updated_by' => 1,
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
        ]);

        return redirect()->action([CSController::class, 'showCsTambahAkun']);
    }

    public function createCsRekening(Request $request)
    {
        $faker = Faker::create('id_ID');
        $no_rek = $faker->unique()->numberBetween(11111111, 99999999);
        
        $rekenings = Rekening::get('no_rekening');
        foreach($rekenings as $rekening) {
            if ($no_rek != $rekening->no_rekening) {
                $request->validate([
                    'id_nasabah' => 'required',
                    'saldo' => 'required|min:500000',
                ]);
        
                Rekening::insert([
                    'id_nasabah' => $request->input('id_nasabah'),
                    'no_rekening' => $faker->unique()->numberBetween(11111111, 99999999),
                    'saldo' => $request->input('saldo'),
                    'created_by' => 1,
                    'updated_by' => 1,
                    'created_at' => Carbon::now('Asia/Jakarta'),
                    'updated_at' => Carbon::now('Asia/Jakarta'),
                ]);
            } else {
                return redirect()->route('cs.CSTambahRekeningStore');
            }
        }

        return redirect()->action([CSController::class, 'showCsTambahRekening']);
    }
}
