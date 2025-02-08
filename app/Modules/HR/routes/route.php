<?php

use Illuminate\Support\Facades\Route;
use App\Modules\HR\Controllers\AttendanceController;

Route::prefix('attendance')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/', [AttendanceController::class, 'index'])->name('Attendance');
    Route::get('/create', [AttendanceController::class, 'create'])->name('Attendance.create');
    Route::post('/filter', [AttendanceController::class, 'filter'])->name('Attendance.filter');
    Route::post('/store', [AttendanceController::class, 'store'])->name('Attendance.store');
    Route::post('/{id}/update', [AttendanceController::class, 'update'])->name('Attendance.update');
    Route::post('/{id}/destroy', [AttendanceController::class, 'destroy'])->name('Attendance.destroy');
});


Route::prefix('leaves')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/', [AttendanceController::class, 'index'])->name('Leave');
});
