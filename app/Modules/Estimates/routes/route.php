<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Estimates\Controllers\EstimateController;
use App\Modules\Estimates\Controllers\EstimateRequestController;

Route::prefix('estimates')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [EstimateController::class, 'index'])->name('Estimates');
    Route::get('/create', [EstimateController::class, 'create'])->name('Estimate.create');
    Route::get('{id}/edit', [EstimateController::class, 'edit'])->name('Estimate.edit');
    Route::post('/store', [EstimateController::class, 'store'])->name('Estimate.store');
    Route::post('{id}/update', [EstimateController::class, 'update'])->name('Estimate.update');
    Route::delete('{id}', [EstimateController::class, 'destroy'])->name('Estimate.delete');
});

Route::prefix('items')->middleware(['web', 'auth:staff'])->group(function () {
    Route::post('/itemRow', [EstimateController::class, 'itemRow'])->name('Estimate.item-row');
});

Route::prefix('estimate_requests')->group(function () {
    Route::get('/', [EstimateRequestController::class, 'index'])->name('EstimateRequest');
    Route::post('/', [EstimateRequestController::class, 'store']);
    Route::get('{id}', [EstimateRequestController::class, 'show']);
    Route::put('{id}', [EstimateRequestController::class, 'update']);
    Route::delete('{id}', [EstimateRequestController::class, 'destroy']);
});


// Add Tab menu to projects Page
Route::prefix('projects')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/estimates', [EstimateController::class, 'project'])->name('Projects.tabs.estimates');
});
