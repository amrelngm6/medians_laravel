<?php

namespace App\Modules\routes;

use Illuminate\Support\Facades\Route;
use App\Modules\Customers\Controllers\ClientController;
use App\Modules\Customers\Controllers\StaffController;


Route::prefix('clients')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('Client');
    Route::get('/create', [ClientController::class, 'create'])->name('Clients.create');
    Route::get('/edit', [ClientController::class, 'edit'])->name('Clients.edit');
    Route::post('/store', [ClientController::class, 'store'])->name('Clients.store');
    Route::get('{id}', [ClientController::class, 'show']);
    Route::put('{id}', [ClientController::class, 'update']);
    Route::delete('{id}', [ClientController::class, 'destroy']);

});

Route::prefix('settings')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/staff', [StaffController::class, 'settings'])->name('Staff.settings');
});

Route::prefix('staff')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [StaffController::class, 'index'])->name('Staff');
    Route::get('/create', [StaffController::class, 'create'])->name('Staff.create');
    Route::get('{id}/settings', [StaffController::class, 'settings'])->name('Staff.setting');
    Route::post('/store', [StaffController::class, 'store'])->name('Staff.store');
    Route::post('{id}', [StaffController::class, 'update'])->name('Staff.update');
    Route::delete('{id}', [StaffController::class, 'destroy'])->name('Staff.delete');
    Route::get('{id}/overview', [StaffController::class, 'overview'])->name('Staff.tabs.overview');
    Route::get('{id}/edit', [StaffController::class, 'settings'])->name('Staff.tabs.edit');
    Route::view('/create_modal', 'includes.modals.new-staff-modal')->name('Staff.create_modal');
    Route::view('/edit_modal/{id}', 'includes.modals.edit-staff-modal')->name('Staff.edit');  
    Route::view('/edit_modal/{id}', 'includes.modals.edit-staff-modal')->name('Staff.edit_modal');

});