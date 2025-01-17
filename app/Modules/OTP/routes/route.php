<?php

use Illuminate\Support\Facades\Route;
use App\Modules\OTP\Controllers\OTPController;

Route::prefix('otp')->middleware(['web'])->group(function () {
    Route::get('/activate', [OTPController::class, 'activate'])->name('OTP.activate');
    Route::post('/verify', [OTPController::class, 'verify'])->name('OTP.verify');
    Route::post('/', [OTPController::class, 'store'])->name('OTP.store');
});

