<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Priorities\Controllers\PriorityController;

Route::prefix('priorities')->middleware(['web', 'auth:superadmin,staff'])->group(function () {
    Route::get('/', [PriorityController::class, 'index'])->name('Priority');
    Route::get('/create', [PriorityController::class, 'create'])->name('Priority.create');
    Route::get('/edit/{id}', [PriorityController::class, 'edit'])->name('Priority.edit_modal');
    Route::get('/{id}/edit_field', [PriorityController::class, 'edit_task_field'])->name('Priority.edit_field');
    Route::post('/', [PriorityController::class, 'store'])->name('Priority.store');
    Route::get('{id}', [PriorityController::class, 'show'])->name('Priority.show');
    Route::post('{id}', [PriorityController::class, 'update'])->name('Priority.update');
    Route::delete('{id}', [PriorityController::class, 'destroy'])->name('Priority.delete');
});
