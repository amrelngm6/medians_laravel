<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Priorities\Controllers\PriorityController;

Route::prefix('priorities')->group(function () {
    Route::get('/', [PriorityController::class, 'index']);
    Route::post('/', [PriorityController::class, 'store']);
    Route::get('{id}', [PriorityController::class, 'show']);
    Route::put('{id}', [PriorityController::class, 'update']);
    Route::delete('{id}', [PriorityController::class, 'destroy']);
});
