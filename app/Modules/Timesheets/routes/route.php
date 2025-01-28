<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Timesheets\Controllers\TimesheetController;

Route::prefix('timesheets')->middleware(['web','auth:staff,superadmin'])->group(function () {
    Route::get('/', [TimesheetController::class, 'index'])->name('Timesheet');
    Route::get('/create', [TimesheetController::class, 'create'])->name('Timesheet.create');
    Route::get('/show_task/{model_id}/{model_type}/', [TimesheetController::class, 'showTask'])->name('Timesheet.show');
    Route::get('/{id}/edit', [TimesheetController::class, 'edit'])->name('Timesheet.edit');
    Route::post('/', [TimesheetController::class, 'store'])->name('Timesheet.store');
    Route::post('/filter', [TimesheetController::class, 'filter'])->name('Timesheet.filter');
    Route::post('{id}/end', [TimesheetController::class, 'end'])->name('Timesheet.end');
    Route::post('{id}/update', [TimesheetController::class, 'update'])->name('Timesheet.update');
    Route::delete('{id}/delete', [TimesheetController::class, 'destroy'])->name('Timesheet.delete');

});

// Add Tab menu to projects Page
Route::prefix('projects')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/timesheets', [TimesheetController::class, 'project'])->name('Projects.tabs.timesheets');
});
