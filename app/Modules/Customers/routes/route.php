<?php

namespace App\Modules\routes;

use Illuminate\Support\Facades\Route;
use App\Modules\Customers\Controllers\ClientController;
use App\Modules\Customers\Controllers\StaffController;


Route::prefix('clients')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('Client');
    Route::get('/create', [ClientController::class, 'create'])->name('Client.create');
    Route::get('/{id}/edit-modal', [ClientController::class, 'editModal'])->name('Client.edit');
    Route::get('{id}', [ClientController::class, 'show'])->name('Client.overview');
    Route::post('/filter', [ClientController::class, 'filter'])->name('Client.filter');
    Route::post('/store', [ClientController::class, 'store'])->name('Client.store');
    Route::post('{id}', [ClientController::class, 'update'])->name('Client.update');
    Route::delete('{id}', [ClientController::class, 'destroy'])->name('Client.delete');
    Route::get('{id}/overview', [ClientController::class, 'show'])->name('Client.tabs.overview');
    Route::get('{id}/edit', [ClientController::class, 'edit'])->name('Client.tabs.edit');
});

/** 
 * Add Staff settings tab at System Settings page
 */
Route::prefix('settings')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/staff', [StaffController::class, 'settings'])->name('Staff.settings');
});

Route::prefix('staff')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [StaffController::class, 'index'])->name('Staff');
    Route::get('/create', [StaffController::class, 'create'])->name('Staff.create');
    Route::get('{id}/settings', [StaffController::class, 'settings'])->name('Staff.setting');
    Route::post('/filter', [StaffController::class, 'filter'])->name('Staff.filter');
    Route::post('/search-input', [StaffController::class, 'searchInput'])->name('Staff.search-input');
    Route::post('/store', [StaffController::class, 'store'])->name('Staff.store');
    Route::post('{id}', [StaffController::class, 'update'])->name('Staff.update');
    Route::delete('{id}', [StaffController::class, 'destroy'])->name('Staff.delete');
    Route::get('{id}/overview', [StaffController::class, 'overview'])->name('Staff.tabs.overview');
    Route::get('{id}/edit', [StaffController::class, 'settings'])->name('Staff.tabs.edit');
    Route::view('/create_modal', 'includes.modals.new-staff-modal')->name('Staff.create_modal');
    Route::view('/edit_modal/{id}', 'includes.modals.edit-staff-modal')->name('Staff.edit');  
    Route::view('/edit_modal/{id}', 'includes.modals.edit-staff-modal')->name('Staff.edit_modal');

});