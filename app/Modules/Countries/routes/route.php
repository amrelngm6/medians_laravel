<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Countries\Controllers\CountryController;

Route::prefix('countries')->group(function () {
    Route::get('/', [CountryController::class, 'index']);
    Route::post('/', [CountryController::class, 'store']);
    Route::get('{id}', [CountryController::class, 'show']);
    Route::put('{id}', [CountryController::class, 'update']);
    Route::delete('{id}', [CountryController::class, 'destroy']);
});
