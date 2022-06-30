<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CSController;
use App\Http\Controllers\TellerController;
use App\Http\Controllers\SetController;

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
        Route::get('/dashboard/mutasi', 'showTransaksi')->name('NasabahTransaksi');
        Route::get('/dashboard/mutasi/{no_rek}', 'viewTransaksi')->name('NasabahTransaksiView');
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

    Route::controller(SetController::class)->prefix('setting')->name('setting.')->group(function () {
        Route::get('/', 'show')->name('setting');
        Route::get('profile', 'showProfile')->name('settingProfile');
        Route::post('profile', 'updateProfile')->name('settingUpdateProfile');
        Route::get('password', 'showPassword')->name('settingPassword');
        Route::post('password', 'updatePassword')->name('settingUpdatePassword');
    });
    
    Route::get("/", [LoginController::class, "show"]);
    Route::get("/login", [LoginController::class, "show"]);
    Route::get("/register", [RegisterController::class, "show"])->name('register');
    
    //for insert new register
    Route::post('create', 'App\Http\Controllers\Auth\RegisterController@store');
});
