<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NasabahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/home", function() {
    return view("home");
});

Route::get("/", [LoginController::class, "show"]);
Route::get("/login", [LoginController::class, "show"]);
Route::get("/register", [RegisterController::class, "show"]);
Route::get("/dashboard", [NasabahController::class, "show"])->name("dashboard");
Route::get("/dashboard/tabungan", [NasabahController::class, "showTabungan"])->name("dashboard.tabungan");
Route::get("/dashboard/transaksi", [NasabahController::class, "showTransaksi"])->name("dashboard.transaksi");
Route::get("/admindashboard", [NasabahController::class, "showAdminDashboard"])->name("admindashboard");
Route::get("/admindashboard/bank", [NasabahController::class, "showAdminBank"])->name("admindashboard.bank");
Route::get("/admindashboard/cs", [NasabahController::class, "showAdminCs"])->name("admindashboard.cs");
Route::get("/admindashboard/teller", [NasabahController::class, "showAdminTeller"])->name("admindashboard.teller");
Route::get("/csdashboard", [NasabahController::class, "showCsDashboard"])->name("csdashboard");
Route::get("/csdashboard/tambahakun", [NasabahController::class, "showCsTambahAkun"])->name("csdashboard.tambahakun");
Route::get("/csdashboard/tambahrekening", [NasabahController::class, "showCsTambahRekening"])->name("csdashboard.tambahrekening");
Route::get("/tellerdashboard", [NasabahController::class, "showTellerDashboard"])->name("tellerdashboard");
Route::get("/tellerdashboard/transaksi", [NasabahController::class, "showTellerTransaksi"])->name("tellerdashboard.transaksi");
Route::get("/tellerdashboard/mutasi", [NasabahController::class, "showTellerMutasi"])->name("tellerdashboard.mutasi");
