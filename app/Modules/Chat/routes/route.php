<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Chat\Controllers\RoomController;
use App\Modules\Chat\Controllers\MessageController;
use App\Modules\Chat\Controllers\ParticipantController;

Route::prefix('chat')->group(function () {
    
    Route::prefix('rooms')->group(function () {
        Route::get('/', [RoomController::class, 'index']);
        Route::post('/', [RoomController::class, 'store']);
        Route::get('{id}', [RoomController::class, 'show']);
        Route::put('{id}', [RoomController::class, 'update']);
        Route::delete('{id}', [RoomController::class, 'destroy']);
        
        Route::post('{roomId}/participants', [ParticipantController::class, 'store']);
        Route::delete('{roomId}/participants/{participantId}', [ParticipantController::class, 'destroy']);
        
        Route::post('{roomId}/messages', [MessageController::class, 'store']);
        Route::delete('{roomId}/messages/{messageId}', [MessageController::class, 'destroy']);
    });
    
    Route::prefix('messages')->group(function () {
        Route::get('/', [MessageController::class, 'index']);
        Route::post('/', [MessageController::class, 'store']);
        Route::get('{id}', [MessageController::class, 'show']);
        Route::put('{id}', [MessageController::class, 'update']);
        Route::delete('{id}', [MessageController::class, 'destroy']);
    });

    Route::prefix('participants')->group(function () {
        Route::get('/', [ParticipantController::class, 'index']);
        Route::post('/', [ParticipantController::class, 'store']);
        Route::get('{id}', [ParticipantController::class, 'show']);
        Route::put('{id}', [ParticipantController::class, 'update']);
        Route::delete('{id}', [ParticipantController::class, 'destroy']);
    });
    
});
