<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Milestones\Controllers\MilestoneController;

Route::prefix('milestones')->middleware(['web','auth:staff,superadmin'])->group(function () {
    Route::get('/', [MilestoneController::class, 'index'])->name('Milestones');
    Route::get('/index', [MilestoneController::class, 'index'])->name('Milestone');
    Route::get('/ajax', [MilestoneController::class, 'index'])->name('Milestones.ajax');
    Route::get('create', [MilestoneController::class, 'create'])->name('Milestone.create');
    Route::get('{id}/show', [MilestoneController::class, 'show'])->name('Milestone.show');
    Route::get('{id}/edit', [MilestoneController::class, 'edit'])->name('Milestone.edit');
    Route::post('{id}', [MilestoneController::class, 'update'])->name('Milestone.update');
    Route::post('/', [MilestoneController::class, 'store'])->name('Milestone.store');
    Route::delete('{id}', [MilestoneController::class, 'destroy'])->name('Milestone.delete');
});


// Add Tab menu to projects Page
Route::prefix('projects')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/milestones', [MilestoneController::class, 'project'])->name('Projects.tabs.milestones');
});

