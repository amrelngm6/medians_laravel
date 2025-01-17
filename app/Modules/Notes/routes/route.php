<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Notes\Controllers\NoteController;

Route::prefix('notes')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [NoteController::class, 'index'])->name('Note');
    Route::post('/', [NoteController::class, 'store'])->name('Note.store');
    Route::post('/store_lead/{leadId}', [NoteController::class, 'store_lead'])->name('Note.store_lead');
    Route::delete('{id}', [NoteController::class, 'destroy'])->name('Note.delete');

    Route::post('/ajax', [NoteController::class, 'ajax'])->name('Note.ajax');
});

Route::prefix('leads')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/notes', [NoteController::class, 'lead'])->name('Lead.tabs.notes');
});

Route::prefix('staff')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/notes', [NoteController::class, 'staff'])->name('Staff.tabs.notes');
});

Route::prefix('projects')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/notes', [NoteController::class, 'project'])->name('Projects.tabs.notes');
});

