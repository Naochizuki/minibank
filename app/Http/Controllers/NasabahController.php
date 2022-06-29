<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;
use App\Models\Rekening;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class NasabahController extends Controller
{
    // view Nasabah
    public function show() {
        return view('Dashboard.user page.user dashboard');
    }

    public function showTabungan() {
        $nasabah = Nasabah::where('id_user', Auth::user()->id)->get();
        $transIn = Transaksi::join('rekening', 'transaksi.id_rekening', '=', 'rekening.id')->join('nasabah', 'rekening.id_nasabah', '=', 'nasabah.id')->where('nasabah.id_user', Auth::user()->id)->where('transaksi.jenis_transaksi', 'Pemasukan')->where('transaksi.tgl_transaksi', '<=', Carbon::now('Asia/Jakarta')->format('Y-m-d'))->get();
        $transOut = Transaksi::join('rekening', 'transaksi.id_rekening', '=', 'rekening.id')->join('nasabah', 'rekening.id_nasabah', '=', 'nasabah.id')->where('nasabah.id_user', Auth::user()->id)->where('transaksi.jenis_transaksi', 'pengeluaran')->where('transaksi.tgl_transaksi', '<=', Carbon::now('Asia/Jakarta')->format('Y-m-d'))->get();
        return view('Dashboard.user page.user money', compact('nasabah', 'transIn', 'transOut'));
    }

    public function showTransaksi() {
        return view('Dashboard.user page.user transaction');
    }
}
