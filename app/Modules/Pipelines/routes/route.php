<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Pipelines\Controllers\PipelineController;

Route::prefix('pipelines')->middleware(['web', 'auth:superadmin,staff'])->group(function () {
    Route::get('/', [PipelineController::class, 'index'])->name('Pipeline');
    Route::get('/{id}/new-stage', [PipelineController::class, 'create_stage'])->name('Pipeline.addStage');
    Route::get('/{id}/edit-stage', [PipelineController::class, 'edit_stage'])->name('PipelineStage.edit');
    Route::get('/{id}/edit', [PipelineController::class, 'edit'])->name('Pipeline.edit');
    Route::get('/{id}/edit_field', [PipelineController::class, 'edit_task_field'])->name('Pipeline.edit_field');
    Route::get('/create', [PipelineController::class, 'create'])->name('Pipeline.create');
    Route::get('{id}', [PipelineController::class, 'show'])->name('Pipeline.show');
    Route::post('/', [PipelineController::class, 'store'])->name('Pipeline.store');
    Route::post('{id}/update', [PipelineController::class, 'update'])->name('Pipeline.update');
    Route::post('{id}/update-stage', [PipelineController::class, 'updateStage'])->name('PipelineStage.update');
    Route::post('/{id}/add-stage', [PipelineController::class, 'storeStage'])->name('Pipeline.store-stage');
    Route::delete('{id}/delete', [PipelineController::class, 'destroy'])->name('Pipeline.delete');
    Route::delete('{id}/delete-stage', [PipelineController::class, 'destroyStage'])->name('PipelineStage.delete');


    Route::get('/{id}/pipeline-deal-change', [PipelineController::class, 'changePipelineModal'])->name('Pipeline.change-pipeline-modal');
    Route::post('/pipeline-change', [PipelineController::class, 'updateSelectedPipeline'])->name('Pipeline.change');
    Route::post('/stage-change', [PipelineController::class, 'updateSelectedStage'])->name('PipelineSelectedStage.change');

    Route::post('/pipeline-search-json', [PipelineController::class, 'searchJson'])->name('Pipeline.search-json');
    
    Route::post('/stage-search-json', [PipelineController::class, 'stageSearchJson'])->name('PipelineStage.search-json');
    Route::get('/stage-search-input/{id}', [PipelineController::class, 'stageSearchInput'])->name('PipelineStage.search-input');

    
});
