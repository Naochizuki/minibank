<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Rekening;
use App\Models\Nasabah;
use Faker\Factory as Faker;
use App\Models\Transaksi;
use Carbon\Carbon;

class AdminController extends Controller
{
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
        $todayOuts = Transaksi::where('tgl_transaksi', $today, 1)->where('jenis_transaksi', 'Pengeluaran',1)->get();
        $weekIns = Transaksi::where('tgl_transaksi', '>=', $weekEnds)->where('tgl_transaksi', '<=', $weekStart)->where('jenis_transaksi', 'Pemasukan')->get();
        $weekOuts = Transaksi::where('tgl_transaksi', '>=', $weekEnds)->where('tgl_transaksi', '<=', $weekStart)->where('jenis_transaksi', 'Pengeluaran')->get();
        $totalIns = Transaksi::where('jenis_transaksi', 'Pemasukan')->get();
        $totalOuts = Transaksi::where('jenis_transaksi', 'Pengeluaran')->get();
        return view('Dashboard.admin page.admin dashboard', compact(['nasabahs', 'todayIns', 'todayOuts', 'weekIns', 'weekOuts', 'totalIns', 'totalOuts', 'rekenings']));
    }

    public function showAdminBank() {
        return view('Dashboard.admin page.admin bank');
    }

    public function showAdminCs() {
        $users = User::where('role', 'cs')->get();
        return view('Dashboard.admin page.admin cs', compact('users'));
    }

    public function showAdminTeller() {
        $users = User::where('role', 'teller')->get();
        return view('Dashboard.admin page.admin teller', compact('users'));
    }
     
    public function showAdminNasabah() 
    {
        $nasabahs = Nasabah::get();
        return view('Dashboard.admin page.admin nasabah', compact('nasabahs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAdminNasabah()
    {
        $nasabahs = Nasabah::get();
        return view('Dashboard.admin page.create admin nasabah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecs(Request $request){
    

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
         ]);

         return redirect('/admin/dashboard/cs')->with('status', 'CS Berhasil ditambah!');
    }

    public function storeteller(Request $request){
    

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
         ]);

         return redirect('/admin/dashboard/teller')->with('status', 'Teller Berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecs(Request $request,User $user)
    {
        $request->validate([
            'nama' => 'required|max:255|min:2',
        ]);

        $user->nama = $request['nama'];
        $user->save();

        return redirect('/admin/dashboard/cs')->with('status', 'CS Berhasil diedit!');
     
    }

    public function updateteller(Request $request,User $user)
    {
        $request->validate([
            'nama' => 'required|max:255|min:2',
        ]);

        $user->nama = $request['nama'];
        $user->save();

        return redirect('/admin/dashboard/teller')->with('status', 'Teller Berhasil diedit!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroycs(User $user)
    {
        $user->delete();
        return redirect('/admin/dashboard/cs')->with('status', 'CS Berhasil dihapus!');
    }

    public function destroyteller(User $user)
    {
        $user->delete();
        return redirect('/admin/dashboard/teller')->with('status', 'Teller Berhasil dihapus!');
    }
}

