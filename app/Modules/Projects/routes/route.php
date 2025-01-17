<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Projects\Controllers\ProjectController;
use App\Modules\Tasks\Controllers\TaskController;

Route::prefix('projects')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('Projects');
    Route::get('/new-project', [ProjectController::class, 'create'])->name('Projects.create');
    Route::get('/{id}/edit', [ProjectController::class, 'edit'])->name('Projects.edit');
    Route::get('{id}', [ProjectController::class, 'show'])->name('Projects.show');
    Route::post('/', [ProjectController::class, 'store'])->name('Projects.store');
    Route::post('{id}', [ProjectController::class, 'update'])->name('Projects.update');
    Route::delete('{id}', [ProjectController::class, 'destroy'])->name('Projects.destroy');

    // Route::prefix('{projectId}/tasks')->group(function () {
    //     Route::get('/', [TaskController::class, 'index'])->name('project_tasks');
    //     Route::post('/', [TaskController::class, 'store']);
    //     Route::get('{id}', [TaskController::class, 'show']);
    //     Route::put('{id}', [TaskController::class, 'update']);
    //     Route::delete('{id}', [TaskController::class, 'destroy']);
    // });
});
