<?php

use Illuminate\Support\Facades\Route;
use App\Modules\HR\Controllers\AttendanceController;
use App\Modules\HR\Controllers\ShiftController;
use App\Modules\HR\Controllers\LeaveController;
use App\Modules\HR\Controllers\LeaveTypeController;

Route::prefix('attendance')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/', [AttendanceController::class, 'index'])->name('Attendance');
    Route::get('/create', [AttendanceController::class, 'create'])->name('Attendance.create');
    Route::post('/filter', [AttendanceController::class, 'filter'])->name('Attendance.filter');
    Route::post('/store', [AttendanceController::class, 'store'])->name('Attendance.store');
    Route::post('/check_in', [AttendanceController::class, 'check_in'])->name('Attendance.check_in');
    Route::post('/{id}/check_out', [AttendanceController::class, 'check_out'])->name('Attendance.check_out');
    Route::post('/{id}/update', [AttendanceController::class, 'update'])->name('Attendance.update');
    Route::delete('/{id}/destroy', [AttendanceController::class, 'destroy'])->name('Attendance.destroy');
});


Route::prefix('leaves')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/', [AttendanceController::class, 'index'])->name('Leave');
});

Route::prefix('shifts')->middleware(['web', 'auth:staff,superadmin'])->group(function () {

    Route::get('/', [ShiftController::class, 'index'])->name('Shift');
    Route::get('/create', [ShiftController::class, 'create'])->name('Shift.create');
    Route::get('/{id}/edit', [ShiftController::class, 'edit'])->name('Shift.edit');
    Route::post('/filter', [ShiftController::class, 'filter'])->name('Shift.filter');
    Route::post('/store', [ShiftController::class, 'store'])->name('Shift.store');
    Route::post('/{id}/update', [ShiftController::class, 'update'])->name('Shift.update');
    Route::delete('/{id}/destroy', [ShiftController::class, 'destroy'])->name('Shift.delete');

});

Route::prefix('leaves')->middleware(['web', 'auth:staff,superadmin'])->group(function () {

    Route::prefix('types')->middleware(['web', 'auth:staff,superadmin'])->group(function () {

        Route::get('/', [LeaveTypeController::class, 'index'])->name('LeaveType');
        Route::get('/create', [LeaveTypeController::class, 'create'])->name('LeaveType.create');
        Route::get('/{id}/edit', [LeaveTypeController::class, 'edit'])->name('LeaveType.edit');
        Route::post('/store', [LeaveTypeController::class, 'store'])->name('LeaveType.store');
        Route::post('/{id}/update', [LeaveTypeController::class, 'update'])->name('LeaveType.update');
        Route::delete('/{id}/destroy', [LeaveTypeController::class, 'destroy'])->name('LeaveType.delete');

    });

    Route::get('/', [LeaveController::class, 'index'])->name('Leave');
    Route::get('/create', [LeaveController::class, 'create'])->name('Leave.create');
    Route::get('/{id}/edit', [LeaveController::class, 'edit'])->name('Leave.edit');
    Route::post('/filter', [LeaveController::class, 'filter'])->name('Leave.filter');
    Route::post('/store', [LeaveController::class, 'store'])->name('Leave.store');
    Route::post('/{id}/update', [LeaveController::class, 'update'])->name('Leave.update');
    Route::delete('/{id}/destroy', [LeaveController::class, 'destroy'])->name('Leave.delete');


});
