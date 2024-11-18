<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Languages\Controllers\LanguageController;

Route::prefix('languages')->group(function () {
    Route::get('/', [LanguageController::class, 'index']);
    Route::post('/', [LanguageController::class, 'store']);
    Route::get('{id}', [LanguageController::class, 'show']);
    Route::put('{id}', [LanguageController::class, 'update']);
    Route::delete('{id}', [LanguageController::class, 'destroy']);
});
