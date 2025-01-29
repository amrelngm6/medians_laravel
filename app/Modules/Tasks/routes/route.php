<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Tasks\Controllers\TaskController;
use App\Modules\Tasks\Controllers\ProjectTasksController;
use App\Modules\Tasks\Controllers\TaskChecklistController;
use App\Modules\Core\Controllers\StatusController;

Route::prefix('tasks')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('Tasks');
    Route::get('/create', [TaskController::class, 'create'])->name('Task.create');
    Route::post('/', [TaskController::class, 'store'])->name('Tasks.store');
    Route::post('/filter', [TaskController::class, 'filter'])->name('Task.filter');
    Route::post('/{id}/add_team', [TaskController::class, 'add_team'])->name('Task.add_team');
    Route::post('/{id}/delete_team', [TaskController::class, 'delete_team'])->name('Task.delete_team');
    Route::post('{id}/update', [TaskController::class, 'update'])->name('Task.update');
    Route::post('/{id}/duplicate', [TaskController::class, 'duplicate'])->name('Task.duplicate');
    Route::delete('{id}', [TaskController::class, 'destroy'])->name('Task.delete');
    
    // Add Tab menu to projects Page
    Route::prefix('checklist')->middleware(['web', 'auth:staff'])->group(function () {
        Route::post('/{task_id}/store', [TaskChecklistController::class, 'store'])->name('TaskChecklist.store');
        Route::post('/{task_id}/update', [TaskChecklistController::class, 'update'])->name('TaskChecklist.update');
        Route::post('/{task_id}/update_sort', [TaskChecklistController::class, 'update_sort'])->name('TaskChecklist.updateSort');
        Route::post('/{task_id}/generate_checklist', [TaskChecklistController::class, 'generateTaskChecklist'])->name('TaskChecklist.generate');
        Route::delete('/{id}/delete', [TaskChecklistController::class, 'destroy'])->name('TaskChecklist.delete');
    });

    Route::get('/{id}/edit_field', [StatusController::class, 'edit_task_field'])->name('StatusList.edit_task_field');
    Route::post('/updateSort', [TaskController::class, 'updateOrder'])->name('Tasks.updateOrder');


});


// Add Tab menu to projects Page
Route::prefix('project')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('{id}/edit_field/{field}', [ProjectTasksController::class, 'edit_field'])->name('Task.edit_field');
    Route::get('/{id}/tasks', [ProjectTasksController::class, 'project'])->name('Projects.tabs.tasks');
    Route::get('{id}/create_task', [ProjectTasksController::class, 'create_project_task'])->name('Tasks.create_project');
    Route::get('edit_task/{taskid}', [ProjectTasksController::class, 'edit_project_task'])->name('Tasks.edit_project');
    Route::get('project_task/{taskid}', [ProjectTasksController::class, 'project_task'])->name('Tasks.project_task');
    
    Route::post('/{id}/filter', [ProjectTasksController::class, 'project_filter'])->name('Project.tasks.filter');
});

