<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CSController;

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

Route::controller(NasabahController::class)->prefix('nasabah')->name('nasabah.')->group(function () {
    Route::get('/dashboard', 'show')->name('NasabahDashboard');
    Route::get('/dashboard/tabungan', 'showTabungan')->name('NasabahTabungan');
    Route::get('/dashboard/transaksi', 'showTransaksi')->name('NasabahTransaksi');
});

Route::controller(CSController::class)->prefix('cs')->name('cs.')->group(function () {
    Route::get('dashboard', 'showCsDashboard')->name('CSDashboard');
    Route::get('dashboard/tambah/nasabah', 'showCsTambahAkun')->name('CSTambahAkun');
    Route::get('dashboard/tambah/teller', 'showCsTambahRekening')->name('CSTambahRekening');
});

Route::controller(TellerController::class)->prefix('teller')->name('teller.')->group(function () {
    Route::get('dashboard', 'showTellerDashboard')->name('TellerDashboard');
    Route::get('dashboard/transaksi', 'showTellerTransaksi')->name('TellerTransaksi');
    Route::get('dashboard/mutasi', 'showTellerMutation')->name('TellerMutasi');
});

Route::controller(AdminController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', 'showAdminDashboard')->name('AdminDashboard');
    Route::get('dashboard/bank', 'showAdminBank')->name('AdminBank');
    Route::get('dashboard/cs', 'showAdminCs')->name('AdminCS');
    Route::get('dashboard/teller', 'showAdminTeller')->name('AdminTeller');
    Route::get('dashboard/nasabah', 'showAdminNasabah')->name('AdminNasabah');
});

Route::get("/", [LoginController::class, "show"]);
Route::get("/login", [LoginController::class, "show"]);
Route::get("/register", [RegisterController::class, "show"])->name('register');

// Route::get("/admindashboard", [AdminController::class, "showAdminDashboard"])->name("admindashboard");
// Route::get("/admindashboard/bank", [AdminController::class, "showAdminBank"])->name("admindashboard.bank");
// Route::get("/admindashboard/nasabah", [AdminController::class, "showAdminNasabah"])->name("admindashboard.nasabah");
// Route::get("/admindashboard/nasabah/create", [AdminController::class, "createAdminNasabah"])->name("admindashboard.nasabah.create");
// Route::get("/admindashboard/cs", [AdminController::class, "showAdminCs"])->name("admindashboard.cs");
// Route::get("/admindashboard/teller", [AdminController::class, "showAdminTeller"])->name("admindashboard.teller");

// Route::get("/csdashboard", [NasabahController::class, "showCsDashboard"])->name("csdashboard");
// Route::get("/csdashboard/tambahakun", [NasabahController::class, "showCsTambahAkun"])->name("csdashboard.tambahakun");
// Route::get("/csdashboard/tambahrekening", [NasabahController::class, "showCsTambahRekening"])->name("csdashboard.tambahrekening");
// Route::get("/tellerdashboard", [NasabahController::class, "showTellerDashboard"])->name("tellerdashboard");
// Route::get("/tellerdashboard/transaksi", [NasabahController::class, "showTellerTransaksi"])->name("tellerdashboard.transaksi");
// Route::get("/tellerdashboard/mutasi", [NasabahController::class, "showTellerMutasi"])->name("tellerdashboard.mutasi");
