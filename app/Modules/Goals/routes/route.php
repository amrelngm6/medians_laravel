<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Goals\Controllers\GoalController;

Route::prefix('goals')->middleware(['web','auth:staff,superadmin'])->group(function () {
    Route::get('/', [GoalController::class, 'index'])->name('Goal');
    Route::get('/create', [GoalController::class, 'create'])->name('Goal.create');
    Route::get('/{id}/show', [GoalController::class, 'show'])->name('Goal.show');
    Route::get('/{id}/edit', [GoalController::class, 'edit'])->name('Goal.edit');
    Route::post('/', [GoalController::class, 'store'])->name('Goal.store');
    Route::post('/filter', [GoalController::class, 'filter'])->name('Goal.filter');
    Route::post('{id}/update', [GoalController::class, 'update'])->name('Goal.update');
    Route::delete('{id}/delete', [GoalController::class, 'destroy'])->name('Goal.delete');

});

Route::prefix('project')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/goals', [GoalController::class, 'project'])->name('Projects.tabs.goals');
});