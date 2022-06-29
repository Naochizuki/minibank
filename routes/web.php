<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CSController;
use App\Http\Controllers\TellerController;

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

Route::group(['middleware' => ['web']], function() {
    Route::get("/home", function() {
        return view("home");
    });

    Route::get('/logout', [LoginController::class, 'actionlogout']);
    
    Route::controller(NasabahController::class)->prefix('nasabah')->name('nasabah.')->group(function () {
        Route::get('/dashboard', 'show')->name('NasabahDashboard');
        Route::get('/dashboard/tabungan', 'showTabungan')->name('NasabahTabungan');
        Route::get('/dashboard/transaksi', 'showTransaksi')->name('NasabahTransaksi');
    });
    
    Route::controller(CSController::class)->prefix('cs')->name('cs.')->group(function () {
        Route::get('dashboard', 'showCsDashboard')->name('CSDashboard');
        Route::get('dashboard/tambah/nasabah', 'showCsTambahAkun')->name('CSTambahAkun');
        Route::post('dashboard/tambah/nasabah', 'createCsNasabah')->name('CSTambahAkunStore');
        Route::get('dashboard/tambah/rekening', 'showCsTambahRekening')->name('CSTambahRekening');
        Route::post('dashboard/tambah/rekening', 'createCsRekening')->name('CSTambahRekeningStore');
    });
    
    Route::controller(TellerController::class)->prefix('teller')->name('teller.')->group(function () {
        Route::get('dashboard', 'showTellerDashboard')->name('TellerDashboard');
        Route::get('dashboard/transaksi', 'showTellerTransaksi')->name('TellerTransaksi');
        Route::get('dashboard/transaksi/setor', 'showTellerTransaksiSetor')->name('TellerTransaksiSetor');
        Route::post('dashboard/transaksi/setor', 'AddTellerTransaksiSetor')->name('TellerTransaksiSetorProccess');
        Route::get('dashboard/transaksi/tarik', 'showTellerTransaksiTarik')->name('TellerTransaksiTarik');
        Route::post('dashboard/transaksi/tarik', 'addTellerTransaksiTarik')->name('TellerTransaksiTarikProccess');
        Route::get('dashboard/mutasi', 'showTellerMutation')->name('TellerMutasi');
        Route::get('dashboard/mutasi/{no_rek}', 'showTellerMutationView')->name('TellerMutasiView');
    });
    
    Route::controller(AdminController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('dashboard', 'showAdminDashboard')->name('AdminDashboard');
        Route::get('dashboard/bank', 'showAdminBank')->name('AdminBank');
        Route::get('dashboard/bank/tambah', 'showAdminConfigAdd')->name('AdminBankAdd');
        Route::post('dashboard/bank/tambah', 'configStore')->name('AdminBankStore');
        Route::get('dashboard/bank/update', 'showAdminConfigUpdate')->name('AdminBankUpdate');
        Route::post('dashboard/bank/update', 'configUpdate')->name('AdminBankUpdateProcces');
        Route::get('dashboard/bank/delete/{id}', 'configDestroy')->name('AdminDeleteConfig');
        Route::get('dashboard/cs', 'showAdminCs')->name('AdminCS');
        Route::get('dashboard/teller', 'showAdminTeller')->name('AdminTeller');
        Route::get('dashboard/nasabah', 'showAdminNasabah')->name('AdminNasabah');
        Route::get('dashboard/nasabah/tambah', 'showAdminNasabahAdd')->name('AdminNasabahAdd');
        Route::post('dashboard/nasabah/tambah', 'createAdminNasabah')->name('AdminNasabahStore');
        Route::get('dashboard/nasabah/{id}', 'showView')->name('AdminViewNasabah');
        Route::get('dashboard/nasabah/delete/{id}', 'nasabahDestroy')->name('AdminDeleteNasabah');
        Route::post('/create', 'storecs')->name('store');
        Route::post('/update/{user}','updatecs')->name('update');
        Route::post('/delete/{user}','destroycs')->name('destroy');
        Route::post('/create1', 'storeteller')->name('store');
        Route::post('/update1/{user}','updateteller')->name('update');
        Route::post('/delete1/{user}','destroyteller')->name('destroy');
    });
    
    Route::get("/", [LoginController::class, "show"]);
    Route::get("/login", [LoginController::class, "show"]);
    Route::get("/register", [RegisterController::class, "show"])->name('register');
    
    // Route::get("/admindashboard", [AdminController::class, "showAdminDashboard"])->name("admindashboard");
    // Route::get("/admindashboard/bank", [AdminController::class, "showAdminBank"])->name("admindashboard`.bank");
    // Route::get("/admindashboard/nasabah", [AdminController::class, "showAdminNasabah"])->name("admindashboard.nasabah");
    // Route::get("/admindashboard/nasabah/create", [AdminController::class, "createAdminNasabah"])->name("admindashboard.nasabah.create");
    // Route::get("/admindashboard/cs", [AdminController::class, "showAdminCs"])->name("admindashboard.cs");
    // Route::get("/admindashboard/teller", [AdminController::class, "showAdminTeller"])->name("admindashboard.teller");
    
    Route::get("/csdashboard", [NasabahController::class, "showCsDashboard"])->name("csdashboard");
    Route::get("/csdashboard/tambahakun", [NasabahController::class, "showCsTambahAkun"])->name("csdashboard.tambahakun");
    Route::get("/csdashboard/tambahrekening", [NasabahController::class, "showCsTambahRekening"])->name("csdashboard.tambahrekening");
    Route::get("/tellerdashboard", [NasabahController::class, "showTellerDashboard"])->name("tellerdashboard");
    Route::get("/tellerdashboard/transaksi", [NasabahController::class, "showTellerTransaksi"])->name("tellerdashboard.transaksi");
    Route::get("/tellerdashboard/mutasi", [NasabahController::class, "showTellerMutasi"])->name("tellerdashboard.mutasi");
    
    //for insert new register
    Route::post('create', 'App\Http\Controllers\Auth\RegisterController@store');
});
