<?php

use App\Http\Controllers\Master\DaftarMenuController;
use App\Http\Controllers\Master\PemasukanController;
use App\Http\Controllers\Master\PesananController;
use App\Http\Controllers\Master\PengeluaranController;
use App\Http\Controllers\Master\RekapitulasiController;
use App\Http\Controllers\Master\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('master')->group(function() {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::resource('daftar-menu', DaftarMenuController::class);
        Route::resource('pemesanan', PesananController::class);
        Route::get('pemesanan/konfirmas-pembayaran/{id}', [PesananController::class, 'konfirmasiPembayaran'])
            ->name('pemesanan.konfirmasi');

        Route::prefix('keuangan')->group(function() {
            Route::get('pemasukan', [PemasukanController::class, 'index'])->name('pemasukan.index');
            Route::resource('pengeluaran', PengeluaranController::class);
            Route::get('rekapitulasi', [RekapitulasiController::class, 'index'])->name('rekapitulasi.index');
        });

        Route::get('lupa-password', [UserController::class, 'index'])->name('lupa-password.index');
        Route::put('lupa-password', [UserController::class, 'changePassword'])->name('lupa-password.change');

        
    });
});

require __DIR__.'/auth.php';
