<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NasabahController extends Controller
{
    // view Nasabah
    public function show() {
        return view('Dashboard.user page.user dashboard');
    }

    public function showTabungan() {
        return view('Dashboard.user page.user money');
    }

    public function showTransaksi() {
        return view('Dashboard.user page.user transaction');
    }
}
