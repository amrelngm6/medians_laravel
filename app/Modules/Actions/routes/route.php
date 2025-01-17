<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Actions\Controllers\CommentController;

Route::prefix('comments')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [CommentController::class, 'index'])->name('Comment');
    Route::post('/', [CommentController::class, 'store'])->name('Comment.store');
    Route::get('{id}', [CommentController::class, 'show']);
    Route::put('{id}', [CommentController::class, 'update']);
    Route::delete('{id}', [CommentController::class, 'destroy']);
});
