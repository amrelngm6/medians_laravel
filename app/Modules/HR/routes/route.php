<?php

use Illuminate\Support\Facades\Route;
use App\Modules\HR\Controllers\EmailAccountController;
use App\Modules\HR\Controllers\EmailMessageController;

Route::prefix('attendance')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/', [LabelController::class, 'index'])->name('Attendance');

});

Route::prefix('leaves')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/', [LabelController::class, 'index'])->name('Leave');
});
