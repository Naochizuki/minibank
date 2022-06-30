<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Nasabah;
use App\Models\Rekening;
use App\Models\Transaksi;
use Faker\Factory as Faker;
use Carbon\Carbon;

class CSController extends Controller
{
    // view CS
    public function showCsDashboard()
    {
        return view('Dashboard.cs.dashboard');
    }

    public function showCsTambahAkun()
    {
        return view('Dashboard.cs.tambah-nasabah');
    }

    public function showCsTambahRekening()
    {
        $nasabahs = Nasabah::get();
        return view('Dashboard.cs.tambah-rekening', compact('nasabahs'));
    }

    public function createCsNasabah(Request $request)
    {
        $before = Carbon::now('Asia/Jakarta')->subYears(17)->format('Y-m-d');
        $request->validate([
            'nama' => 'required|max:255|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'alamat' => 'required|min:2',
            'no_telp' => 'required',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
            'nama_ibu' => 'required',
            'tgl_lahir' => 'required|date|before:' . $before,
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

        return redirect()->action([CSController::class, 'showCsDashboard']);
    }

    public function createCsRekening(Request $request)
    {
        $faker = Faker::create('id_ID');
        $no_rek = $faker->unique()->numberBetween(11111111, 99999999);
        $cek = 1;
        
        $rekenings = Rekening::get();
        foreach($rekenings as $rekening) {
            if($no_rek != $rekening->no_rekening) {
                $cek = 1;
            } else {
                $cek = 0;
            }
        }
        if ($cek === 1) {
            $request->validate([
                'id_nasabah' => 'required',
                'saldo' => 'required|numeric|min:499999',
            ]);

            $rek_id = Rekening::insertGetId([
                'id_nasabah' => $request->input('id_nasabah'),
                'no_rekening' => $no_rek,
                'saldo' => $request->input('saldo'),
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta'),
            ]);
            
            Transaksi::insert([
                'id_rekening' => $rek_id,
                'tgl_transaksi' => Carbon::now('Asia/Jakarta')->format('Y-m-d'),
                'jenis_transaksi' => 'Pemasukan',
                'nominal' => $request->input('saldo'),
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta'),
            ]);
        } else {
            return redirect()->route('cs.CSTambahRekeningStore');
        }



        return redirect()->action([CSController::class, 'showCsDashboard']);
    }
}
