<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TellerController extends Controller
{
    // view Teller
    public function showTellerDashboard() {
        return view('Dashboard.teller page.teller dashboard');
    }

    public function showTellerTransaksi() {
        return view('Dashboard.teller page.teller transaction');
    }

    public function showTellerMutation() {
        return view('Dashboard.teller page.teller mutation');
    }
}
