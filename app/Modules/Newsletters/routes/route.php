<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Newsletters\Controllers\NewsletterController;
use App\Modules\Newsletters\Controllers\SubscriberController;

Route::prefix('newsletters')->group(function () {
    
    Route::get('/', [NewsletterController::class, 'index']);
    Route::post('/', [NewsletterController::class, 'store']);
    Route::get('{id}', [NewsletterController::class, 'show']);
    Route::put('{id}', [NewsletterController::class, 'update']);
    Route::delete('{id}', [NewsletterController::class, 'destroy']);
    
    Route::prefix('subscribers')->group(function () {
        Route::get('/', [SubscriberController::class, 'index']);
        Route::post('/', [SubscriberController::class, 'store']);
        Route::get('{id}', [SubscriberController::class, 'show']);
        Route::put('{id}', [SubscriberController::class, 'update']);
        Route::delete('{id}', [SubscriberController::class, 'destroy']);
    });

});
