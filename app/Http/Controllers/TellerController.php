<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rekening;
use App\Models\Nasabah;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TellerController extends Controller
{
    // view Teller
    public function showTellerDashboard() {
        return view('Dashboard.teller page.teller dashboard');
    }

    public function showTellerTransaksi() {
        $today = Carbon::now('Asia/Jakarta')->format('Y-m-d');
        $weekStart = Carbon::now('Asia/Jakarta')->format('Y-m-d');
        $weekEnds = Carbon::now('Asia/Jakarta')->subDay(7)->format('Y-m-d');

        $nasabahs = Nasabah::get();
        $rekenings = Rekening::get();
        $todayIns = Transaksi::where('tgl_transaksi', $today, 1)->where('jenis_transaksi', 'Pemasukan', 1)->get();
        $todayOuts = Transaksi::where('tgl_transaksi', $today, 1)->where('jenis_transaksi', 'Pengeluaran',1)->get();
        $weekIns = Transaksi::where('tgl_transaksi', '>=', $weekEnds)->where('tgl_transaksi', '<=', $weekStart)->where('jenis_transaksi', 'Pemasukan')->get();
        $weekOuts = Transaksi::where('tgl_transaksi', '>=', $weekEnds)->where('tgl_transaksi', '<=', $weekStart)->where('jenis_transaksi', 'Pengeluaran')->get();
        return view('Dashboard.teller page.teller transaction', compact(['nasabahs', 'todayIns', 'todayOuts', 'weekIns', 'weekOuts', 'rekenings']));
    }

    public function showTellerMutation() {
        $users = Transaksi::get();
        return view('Dashboard.teller page.teller mutation', compact('users'));
    }
}
