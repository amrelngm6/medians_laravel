<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Deals\Controllers\DealController;

Route::prefix('deals')->middleware(['web', 'auth:superadmin,staff'])->group(function () {
    Route::get('/', [DealController::class, 'index'])->name('Deal');
    Route::get('/{id}/new-stage', [DealController::class, 'create_stage'])->name('Deal.addStage');
    Route::get('/{id}/edit-stage', [DealController::class, 'edit_stage'])->name('DealStage.edit');
    Route::get('/{id}/edit', [DealController::class, 'edit'])->name('Deal.edit');
    Route::get('/{id}/edit_field', [DealController::class, 'edit_task_field'])->name('Deal.edit_field');
    Route::get('/create', [DealController::class, 'create'])->name('Deal.create');
    Route::get('{id}', [DealController::class, 'show'])->name('Deal.show');
    Route::post('/', [DealController::class, 'store'])->name('Deal.store');
    Route::post('{id}/update', [DealController::class, 'update'])->name('Deal.update');
    Route::post('{id}/update-stage', [DealController::class, 'updateStage'])->name('DealStage.update');
    Route::post('/{id}/add-stage', [DealController::class, 'storeStage'])->name('Deal.store-stage');
    Route::delete('{id}/delete', [DealController::class, 'destroy'])->name('Deal.delete');
    Route::delete('{id}/delete-stage', [DealController::class, 'destroyStage'])->name('DealStage.delete');
});
