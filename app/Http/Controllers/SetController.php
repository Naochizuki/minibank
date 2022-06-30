<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;
use App\Models\User;
use App\Models\Rekening;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class SetController extends Controller
{
    public function show()
    {
        return view('setting');
    }

    public function showProfile()
    {
        $nasabah = Nasabah::where('id_user', Auth::user()->id)->get();
        $users = User::get();
        // $rekening = Rekening::join('nasabah', 'rekening.id_nasabah', '=', 'nasabah.id')->where('nasabah.id_user', Auth::user()->id)->get();
        // $transaksi = Transaksi::where('id_user', Auth::user()->id)->get();
        return view('profile', compact(['nasabah', 'users']));
    }

    public function showPassword()
    {
        return view('password');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'email' => 'email',
            'foto' => 'file|image'
        ]);

        $path = Auth::user()->foto;
        if ($request->has('foto')) {
            $path = Storage::disk('public')->putFile('foto', $request->file('foto'));
        }

        if (Auth::user()->role == 'nasabah') {
            $nasabah = Nasabah::find($request->input('id'));
            $nasabah->no_telp = $request->input('no_telp');
            $nasabah->alamat = $request->input('alamat');
            $nasabah->save();
        }

        $user = User::find(Auth::user()->id);
        $user->email = $request->input('email');
        $user->foto = $path;
        $user->save();

        return redirect()->action([SetController::class, 'show']);
    }
}
