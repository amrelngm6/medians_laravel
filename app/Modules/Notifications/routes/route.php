<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Notifications\Controllers\NotificationController;
use App\Modules\Notifications\Controllers\EventController;

Route::prefix('notifications')->group(function () {
    
    Route::get('/', [NotificationController::class, 'index']);
    Route::post('/', [NotificationController::class, 'store']);
    Route::get('{id}', [NotificationController::class, 'show']);
    Route::put('{id}', [NotificationController::class, 'update']);
    Route::delete('{id}', [NotificationController::class, 'destroy']);

    Route::prefix('events')->group(function () {
        
        Route::get('/', [EventController::class, 'index']);
        Route::post('/', [EventController::class, 'store']);
        Route::get('{id}', [EventController::class, 'show']);
        Route::put('{id}', [EventController::class, 'update']);
        Route::delete('{id}', [EventController::class, 'destroy']);
    });
});
