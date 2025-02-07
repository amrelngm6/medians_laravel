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


    /**
     * Setting page
     */
    Route::get('/{id}/settings', [ProjectController::class, 'settings'])->name('Projects.settings');
    
});
