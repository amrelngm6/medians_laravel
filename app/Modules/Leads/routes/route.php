<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Leads\Controllers\LeadSourceController;
use App\Modules\Leads\Controllers\LeadController;

Route::prefix('lead_sources')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [LeadSourceController::class, 'index'])->name('LeadSource');
    Route::get('/create', [LeadSourceController::class, 'create'])->name('LeadSource.create');
    Route::post('/store', [LeadSourceController::class, 'store'])->name('LeadSource.store');
    Route::post('{id}', [LeadSourceController::class, 'update'])->name('LeadSource.update');
    Route::delete('{id}', [LeadSourceController::class, 'destroy'])->name('LeadSource.delete');
    Route::view('/create_modal', 'includes.modals.new-lead-source-modal')->name('LeadSource.create_modal');
    Route::view('/edit_modal/{id}', 'includes.modals.edit-lead-source-modal')->name('LeadSource.edit_modal');

});

Route::prefix('settings')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/leads', [LeadController::class, 'index'])->name('Lead.settings');
});

Route::prefix('leads')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [LeadController::class, 'index'])->name('Lead');
    Route::get('/create', [LeadController::class, 'create'])->name('Lead.create');
    Route::post('/store', [LeadController::class, 'store'])->name('Lead.store');
    Route::post('{id}', [LeadController::class, 'update'])->name('Lead.update');
    Route::delete('{id}', [LeadController::class, 'destroy'])->name('Lead.delete');
    
    Route::get('/{id}/overview', [LeadController::class, 'overview'])->name('Lead.tabs.overview');
    Route::get('/{id}/settings', [LeadController::class, 'settings'])->name('Lead.tabs.settings');
    Route::get('/{id}/edit', [LeadController::class, 'edit'])->name('Lead.tabs.edit');

});
