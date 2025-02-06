<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Actions\Controllers\CommentController;
use App\Modules\Actions\Controllers\ReminderController;

Route::prefix('comments')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [CommentController::class, 'index'])->name('Comment');
    Route::post('/', [CommentController::class, 'store'])->name('Comment.store');
    Route::get('{id}', [CommentController::class, 'show']);
    Route::put('{id}', [CommentController::class, 'update']);
    Route::delete('{id}', [CommentController::class, 'destroy']);
});


Route::prefix('reminders')->middleware(['web', 'auth:staff'])->group(function () {
    Route::post('/subscribe', [ReminderController::class, 'subscribe'])->name('Reminder.subscribe');
});


Route::prefix('reminders')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [ReminderController::class, 'index'])->name('Reminder');
    Route::get('create', [ReminderController::class, 'create'])->name('Reminder.create');
    Route::get('/createForModel/{model_id}/{model_type}', [ReminderController::class, 'createForModel'])->name('Reminder.createForModel');
    Route::get('/showList/{model_id}/{model_type}', [ReminderController::class, 'showList'])->name('Reminder.showList');
    Route::get('{id}/show', [ReminderController::class, 'show'])->name('Reminder.show');
    Route::post('/filter', [ReminderController::class, 'filter'])->name('Reminder.filter');
    Route::post('/store', [ReminderController::class, 'store'])->name('Reminder.store');
    Route::post('{id}/update', [ReminderController::class, 'update'])->name('Reminder.update');
    Route::delete('{id}/delete', [ReminderController::class, 'destroy'])->name('Reminder.delete');
});


