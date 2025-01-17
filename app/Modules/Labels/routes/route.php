<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Labels\Controllers\LabelController;

Route::prefix('labels')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [LabelController::class, 'index']);
    Route::post('/', [LabelController::class, 'store'])->name('Label.store');
    Route::post('/store_lead/{leadId}', [LabelController::class, 'store_lead'])->name('Label.store_lead');
    Route::delete('{id}', [LabelController::class, 'destroy'])->name('Label.delete');
});

Route::prefix('leads')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/labels', [LabelController::class, 'lead'])->name('Lead.tabs.labels');
});

