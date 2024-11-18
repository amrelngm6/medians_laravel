<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Todos\Controllers\TodoController;

Route::prefix('todo')->group(function () {
    Route::get('/', [TodoController::class, 'index']);
    Route::post('/', [TodoController::class, 'store']);
    Route::get('{id}', [TodoController::class, 'show']);
    Route::put('{id}', [TodoController::class, 'update']);
    Route::delete('{id}', [TodoController::class, 'destroy']);
});
