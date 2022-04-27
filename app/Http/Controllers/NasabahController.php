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

    // view Admin
    public function showAdminDashboard() {
        return view('Dashboard.admin page.admin dashboard');
    }

    public function showAdminBank() {
        return view('Dashboard.admin page.admin bank');
    }

    public function showAdminCs() {
        return view('Dashboard.admin page.admin cs');
    }

    public function showAdminTeller() {
        return view('Dashboard.admin page.admin teller');
    }

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

    // view Teller
    public function showTellerDashboard() {
        return view('Dashboard.teller page.teller dashboard');
    }

    public function showTellerTransaksi() {
        return view('Dashboard.teller page.teller transaction');
    }

    public function showTellerMutation() {
        return view('Dashboard.teller page.teller mutasi');
    }
}
