<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Feed\Controllers\PostController;

Route::prefix('feed')->group(function () {

    Route::prefix('post')->group(function () {
        Route::get('/', [PostController::class, 'index']);
        Route::post('/', [PostController::class, 'store']);
        Route::get('{id}', [PostController::class, 'show']);
        Route::put('{id}', [PostController::class, 'update']);
        Route::delete('{id}', [PostController::class, 'destroy']);
    });
    
});

