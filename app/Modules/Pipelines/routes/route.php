<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Pipelines\Controllers\PipelineController;

Route::prefix('pipelines')->middleware(['web', 'auth:superadmin,staff'])->group(function () {
    Route::get('/', [PipelineController::class, 'index'])->name('Pipeline');
    Route::get('/create', [PipelineController::class, 'create'])->name('Pipeline.create');
    Route::get('/edit/{id}', [PipelineController::class, 'edit'])->name('Pipeline.edit_modal');
    Route::get('/{id}/edit_field', [PipelineController::class, 'edit_task_field'])->name('Pipeline.edit_field');
    Route::post('/', [PipelineController::class, 'store'])->name('Pipeline.store');
    Route::get('{id}', [PipelineController::class, 'show'])->name('Pipeline.show');
    Route::post('{id}', [PipelineController::class, 'update'])->name('Pipeline.update');
    Route::delete('{id}', [PipelineController::class, 'destroy'])->name('Pipeline.delete');
});
