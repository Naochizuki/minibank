<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Rekening;
use App\Models\Nasabah;
use Faker\Factory as Faker;
use App\Models\Transaksi;
use App\Models\Konfigurasi;
use Carbon\Carbon;

class AdminController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // view Admin
    public function showAdminDashboard() {
        $today = Carbon::now('Asia/Jakarta')->format('Y-m-d');
        $weekStart = Carbon::now('Asia/Jakarta')->format('Y-m-d');
        $weekEnds = Carbon::now('Asia/Jakarta')->subDay(7)->format('Y-m-d');

        $nasabahs = Nasabah::get();
        $rekenings = Rekening::get();
        $todayIns = Transaksi::where('tgl_transaksi', $today, 1)->where('jenis_transaksi', 'Pemasukan', 1)->get();
        $todayOuts = Transaksi::where('tgl_transaksi', $today, 1)->where('jenis_transaksi', 'Pengeluaran', 1)->get();
        $weekIns = Transaksi::where('tgl_transaksi', '>=', $weekEnds)->where('tgl_transaksi', '<=', $weekStart)->where('jenis_transaksi', 'Pemasukan')->get();
        $weekOuts = Transaksi::where('tgl_transaksi', '>=', $weekEnds)->where('tgl_transaksi', '<=', $weekStart)->where('jenis_transaksi', 'Pengeluaran')->get();
        $totalIns = Transaksi::where('jenis_transaksi', 'Pemasukan')->get();
        $totalOuts = Transaksi::where('jenis_transaksi', 'Pengeluaran')->get();
        return view('Dashboard.admin page.admin dashboard', compact(['nasabahs', 'todayIns', 'todayOuts', 'weekIns', 'weekOuts', 'totalIns', 'totalOuts', 'rekenings']));
    }

    public function showAdminBank() {
        $configs = Konfigurasi::get();
        return view('Dashboard.admin page.admin bank', compact('configs'));
    }

    public function showAdminCs() {
        $users = User::where('role', 'cs')->get();
        return view('Dashboard.admin page.admin cs', compact('users'));
    }

    public function showAdminTeller() {
        $users = User::where('role', 'teller')->get();
        return view('Dashboard.admin page.admin teller', compact('users'));
    }

    public function showAdminNasabah() {
        $nasabah = Nasabah::get();
        $users = User::join('nasabah', 'users.id', '=', 'nasabah.id_user')->get('email');
        return view('Dashboard.admin page.admin nasabah', compact(['nasabah', 'users']));
    }

    public function showView(Request $request) {
        $id = $request->id;
        $nasabah = Nasabah::where('id', $id)->get();
        $users = User::join('nasabah', 'users.id', '=', 'nasabah.id_user')->where('nasabah.id', '=', $id)->get();                       
        return view('Dashboard.admin page.admin nasabah view', compact(['nasabah', 'users', 'id']));
    }

    public function nasabahDestroy(Request $request) {
        $id = $request->id;
        Rekening::where('id_nasabah', $id)->delete();
        $nasabah = Nasabah::where('id', $id)->get();
        Nasabah::where('id', $id)->delete();
        User::where('id', $nasabah[0]->id_user)->delete();

        return redirect()->action([AdminController::class, 'showAdminNasabah']);
    }

    public function showAdminConfigAdd() {
        return view('Dashboard.admin page.admin config add');
    }

    public function showAdminConfigUpdate() {
        $configs = Konfigurasi::get();
        return view('Dashboard.admin page.admin config update', compact('configs'));
    }

    public function configStore(Request $request) {
        $request->validate([
            'code' => 'required',
            'code_value' => 'required'
        ]);

        Konfigurasi::insert([
            'code' => $request->input('code'),
            'code_value' => $request->input('code_value'),
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        return redirect()->action([AdminController::class, 'showAdminBank']);
    }

    public function configUpdate(Request $request) {
        for ($i = 0; $i < Konfigurasi::get()->count(); $i++) {
            $newId = 'id'.($i+1);
            $newCode = 'code'.($i+1);
            $newCode_value = 'code_value'.($i+1);
            $config = Konfigurasi::find($request->input($newId));

            $config->code = $request->input($newCode);
            $config->code_value = $request->input($newCode_value);
            $config->save();
        }


        return redirect()->action([AdminController::class, 'showAdminBank']);
    }

    public function configDestroy(Request $request) {
        $id = $request->id;
        Konfigurasi::where('id', $id)->delete();

        return redirect()->action([AdminController::class, 'showAdminBank']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAdminNasabah(Request $request) {
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

        return redirect()->action([AdminController::class, 'showAdminNasabah']);
    }

    public function showAdminNasabahAdd() {
        return view('Dashboard.admin page.create admin nasabah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecs(Request $request) {


        $request->validate([
            'nama' => 'required|max:255|min:2',
        ]);

        $faker = Faker::create('id_ID');
        $encrypted = bcrypt('password');

        $user = User::create([
            'nama' =>  $request['nama'],
            'role' => 'cs',
            'email' => $faker->unique()->safeEmail(),
            'password' => $encrypted,
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
        ]);

        return redirect('/admin/dashboard/cs')->with('status', 'CS Berhasil ditambah!');
    }

    public function storeteller(Request $request) {


        $request->validate([
            'nama' => 'required|max:255|min:2',
        ]);

        $faker = Faker::create('id_ID');
        $encrypted = bcrypt('password');

        $user = User::create([
            'nama' =>  $request['nama'],
            'role' => 'teller',
            'email' => $faker->unique()->safeEmail(),
            'password' => $encrypted,
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
        ]);

        return redirect('/admin/dashboard/teller')->with('status', 'Teller Berhasil ditambah!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecs(Request $request, User $user) {
        $request->validate([
            'nama' => 'required|max:255|min:2',
        ]);

        $user->nama = $request['nama'];
        $user->updated_at = Carbon::now('Asia/Jakarta');
        $user->save();
        
        return redirect('/admin/dashboard/cs')->with('status', 'CS Berhasil diedit!');
    }
    
    public function updateteller(Request $request, User $user) {
        $request->validate([
            'nama' => 'required|max:255|min:2',
        ]);
        
        $user->nama = $request['nama'];
        $user->updated_at = Carbon::now('Asia/Jakarta');
        $user->save();

        return redirect('/admin/dashboard/teller')->with('status', 'Teller Berhasil diedit!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroycs(User $user) {
        $user->delete();
        return redirect('/admin/dashboard/cs')->with('status', 'CS Berhasil dihapus!');
    }

    public function destroyteller(User $user) {
        $user->delete();
        return redirect('/admin/dashboard/teller')->with('status', 'Teller Berhasil dihapus!');
    }
}
