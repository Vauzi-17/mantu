<?php

use App\Http\Controllers\RsvpController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VoucherScanController;
use App\Http\Controllers\VoucherRedeemController; // <-- TAMBAHKAN INI
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('rumah'); 
})->name('home');

// Halaman RSVP untuk Tamu
Route::get('/rsvp', [RsvpController::class, 'index'])->name('rsvp.index');
Route::post('/rsvp', [RsvpController::class, 'store'])->name('rsvp.store');

// Halaman Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');
    
Route::get('/admin/dashboard/voucher', [VoucherController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard_voucher');
    
Route::get('/admin/dashboard/guest', [GuestController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard_guest');

Route::resource('voucher', DashboardController::class);
Route::resource('voucher', VoucherController::class);
Route::resource('guest', GuestController::class);

// Halaman Scanner dan API untuk Staf Merchandise (Wajib Login)
Route::middleware(['auth'])->group(function () {
    // Rute Halaman Scanner
    Route::get('/admin/voucher/scan', [VoucherScanController::class, 'index'])->name('voucher.scan');

    // API Endpoint untuk memvalidasi QR Code
    // Dipindahkan dari api.php agar bisa menggunakan session auth ('web')
    Route::post('/voucher/redeem', [VoucherRedeemController::class, 'redeem'])->name('voucher.redeem');
});

// Rute Autentikasi Bawaan Breeze (biarkan di top level)
require __DIR__.'/auth.php';