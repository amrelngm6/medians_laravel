<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Projects\Controllers\ProjectController;
use App\Modules\Tasks\Controllers\TaskController;

Route::prefix('projects')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('projects_list');
    Route::get('{id}', [ProjectController::class, 'show'])->name('project_view');
    Route::post('/', [ProjectController::class, 'store']);
    Route::put('{id}', [ProjectController::class, 'update']);
    Route::delete('{id}', [ProjectController::class, 'destroy']);

    Route::prefix('{projectId}/tasks')->group(function () {
        Route::get('/', [TaskController::class, 'index'])->name('project_tasks');
        Route::post('/', [TaskController::class, 'store']);
        Route::get('{id}', [TaskController::class, 'show']);
        Route::put('{id}', [TaskController::class, 'update']);
        Route::delete('{id}', [TaskController::class, 'destroy']);
    });
});
