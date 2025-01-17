<?php

use Illuminate\Support\Facades\Route;
use App\Modules\CustomFields\Controllers\CustomFieldController;

Route::prefix('custom_fields')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [CustomFieldController::class, 'index'])->name('CustomField');
    Route::get('/create', [CustomFieldController::class, 'create'])->name('CustomField.create');
    Route::get('/{id}', [CustomFieldController::class, 'edit'])->name('CustomField.edit');
    Route::post('/', [CustomFieldController::class, 'store'])->name('CustomField.store');
    Route::post('/{id}', [CustomFieldController::class, 'update'])->name('CustomField.update');
    Route::delete('{id}', [CustomFieldController::class, 'destroy'])->name('CustomField.delete');

    Route::post('/ajax', [CustomFieldController::class, 'ajax'])->name('CustomField.ajax');

});

// Route::prefix('staff')->middleware(['web', 'auth:user'])->group(function () {
//     Route::get('/{id}/notes', [CustomFieldController::class, 'staff'])->name('Staff.tabs.notes');
// });

