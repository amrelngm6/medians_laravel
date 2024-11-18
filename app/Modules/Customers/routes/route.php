<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Customers\Controllers\ClientController;
use App\Modules\Customers\Controllers\TaskController;

Route::prefix('clients')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('list');
    Route::get('/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/', [ClientController::class, 'store'])->name('clients.store');
    Route::get('{id}', [ClientController::class, 'show']);
    Route::put('{id}', [ClientController::class, 'update']);
    Route::delete('{id}', [ClientController::class, 'destroy']);

    Route::prefix('{customerId}/tasks')->group(function () {
        Route::get('/', [TaskController::class, 'index']);
        Route::post('/', [TaskController::class, 'store']);
        Route::get('{id}', [TaskController::class, 'show']);
        Route::put('{id}', [TaskController::class, 'update']);
        Route::delete('{id}', [TaskController::class, 'destroy']);
    });
});
