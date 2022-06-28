<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSController extends Controller
{
    // view CS
    public function showCsDashboard() {
        return view('Dashboard.cs page.cs dashboard');
    }

    public function showCsTambahAkun() {
        return view('Dashboard.cs page.cs add');
    }

    public function showCsTambahRekening() {
        return view('Dashboard.cs page.cs add account');
    }
}
