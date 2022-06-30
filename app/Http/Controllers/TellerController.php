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
    public function showTellerDashboard()
    {
        return view('Dashboard.teller.dashboard');
    }

    public function showTellerTransaksi()
    {
        $today = Carbon::now('Asia/Jakarta')->format('Y-m-d');
        $weekStart = Carbon::now('Asia/Jakarta')->format('Y-m-d');
        $weekEnds = Carbon::now('Asia/Jakarta')->subDay(7)->format('Y-m-d');

        $nasabahs = Nasabah::get();
        $rekenings = Rekening::get();
        $todayIns = Transaksi::where('tgl_transaksi', $today, 1)->where('jenis_transaksi', 'Pemasukan', 1)->get();
        $todayOuts = Transaksi::where('tgl_transaksi', $today, 1)->where('jenis_transaksi', 'Pengeluaran',1)->get();
        $weekIns = Transaksi::where('tgl_transaksi', '>=', $weekEnds)->where('tgl_transaksi', '<=', $weekStart)->where('jenis_transaksi', 'Pemasukan')->get();
        $weekOuts = Transaksi::where('tgl_transaksi', '>=', $weekEnds)->where('tgl_transaksi', '<=', $weekStart)->where('jenis_transaksi', 'Pengeluaran')->get();
        return view('Dashboard.teller.transaksi', compact(['nasabahs', 'todayIns', 'todayOuts', 'weekIns', 'weekOuts', 'rekenings']));
    }

    public function showTellerMutationView(Request $request)
    {
        $no_rek = $request->no_rek;
        $transaksis = Transaksi::join('rekening', 'transaksi.id_rekening', '=', 'rekening.id')->join('nasabah', 'rekening.id_nasabah', '=', 'nasabah.id')->where('rekening.no_rekening', $no_rek)->OrderBy('transaksi.tgl_transaksi')->get();
        return view('Dashboard.teller.cek-mutasi', compact('transaksis'));
    }

    public function showTellerMutation()
    {
        $rekenings = Rekening::join('nasabah', 'rekening.id_nasabah', '=', 'nasabah.id')->OrderBy('nasabah.id')->get();
        return view('Dashboard.teller.mutasi', compact('rekenings'));
    } 

    public function showTellerTransaksiSetor()
    {
        $nasabahs = Nasabah::get();
        $rekenings = Rekening::get();
        return view('Dashboard.teller.transaksi-setor', compact(['rekenings', 'nasabahs']));
    }

    public function showTellerTransaksiTarik()
    {
        $nasabahs = Nasabah::get();
        $rekenings = Rekening::get();
        return view('Dashboard.teller.transaksi-tarik', compact(['rekenings', 'nasabahs']));
    }

    public function addTellerTransaksiSetor(Request $request)
    {
        $request->validate([
            'id_rekening' => 'required',
            'saldo' => 'required',
        ]);

        Transaksi::insert([
            'id_rekening' => $request->input('id_rekening'),
            'tgl_transaksi' => Carbon::now('Asia/Jakarta')->format('Y-m-d'),
            'jenis_transaksi' => 'Pemasukan',
            'nominal' => $request->input('saldo'),
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
        ]);

        $rekening = Rekening::find($request->input('id_rekening'));

        $rekening->saldo = $rekening->saldo + $request->input('saldo');
        $rekening->updated_at = Carbon::now('Asia/Jakarta');
        $rekening->save();

        return redirect()->action([TellerController::class, 'showTellerTransaksi']);
    }

    public function addTellerTransaksiTarik(Request $request)
    {
        $request->validate([
            'id_rekening' => 'required',
            'saldo' => 'required',
        ]);

        Transaksi::insert([
            'id_rekening' => $request->input('id_rekening'),
            'tgl_transaksi' => Carbon::now('Asia/Jakarta')->format('Y-m-d'),
            'jenis_transaksi' => 'Pengeluaran',
            'nominal' => $request->input('saldo'),
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
        ]);

        $rekening = Rekening::find($request->input('id_rekening'));

        $rekening->saldo = $rekening->saldo - $request->input('saldo');
        $rekening->updated_at = Carbon::now('Asia/Jakarta');
        $rekening->save();


        return redirect()->action([TellerController::class, 'showTellerTransaksi']);
    }
}
