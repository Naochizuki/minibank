<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;
use App\Models\Rekening;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class NasabahController extends Controller
{
    // view Nasabah
    public function show() {
        // dd(Storage::url('app/public/'.Auth::user()->foto));
        return view('Dashboard.nasabah.dashboard');
    }

    public function showTabungan() {
        $nasabah = Nasabah::where('id_user', Auth::user()->id)->get();
        $transIn = Transaksi::join('rekening', 'transaksi.id_rekening', '=', 'rekening.id')->join('nasabah', 'rekening.id_nasabah', '=', 'nasabah.id')->where('nasabah.id_user', Auth::user()->id)->where('transaksi.jenis_transaksi', 'Pemasukan')->where('transaksi.tgl_transaksi', '<=', Carbon::now('Asia/Jakarta')->format('Y-m-d'))->get();
        $transOut = Transaksi::join('rekening', 'transaksi.id_rekening', '=', 'rekening.id')->join('nasabah', 'rekening.id_nasabah', '=', 'nasabah.id')->where('nasabah.id_user', Auth::user()->id)->where('transaksi.jenis_transaksi', 'pengeluaran')->where('transaksi.tgl_transaksi', '<=', Carbon::now('Asia/Jakarta')->format('Y-m-d'))->get();
        $rek = Rekening::where('id_nasabah', $nasabah[0]->id)->get();
        // dd($transIn);
        return view('Dashboard.nasabah.tabungan', compact('nasabah', 'transIn', 'transOut', 'rek'));
    }

    public function showTransaksi() {
        $rekenings = Rekening::join('nasabah', 'rekening.id_nasabah', '=', 'nasabah.id')->where('nasabah.id_user', Auth::user()->id)->OrderBy('rekening.id')->get();
        return view('Dashboard.nasabah.mutasi', compact('rekenings'));
    }

    public function viewTransaksi(Request $request)
    {
        $no_rek = $request->no_rek;
        $transaksis = Transaksi::join('rekening', 'transaksi.id_rekening', '=', 'rekening.id')->join('nasabah', 'rekening.id_nasabah', '=', 'nasabah.id')->where('rekening.no_rekening', $no_rek)->OrderBy('transaksi.tgl_transaksi')->get();
        return view('Dashboard.nasabah.cek-mutasi', compact('transaksis'));
    }
}
