<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Estimates\Controllers\EstimateController;
use App\Modules\Estimates\Controllers\EstimateRequestController;

Route::prefix('estimates')->group(function () {
    Route::get('/', [EstimateController::class, 'index']);
    Route::post('/', [EstimateController::class, 'store']);
    Route::get('{id}', [EstimateController::class, 'show']);
    Route::put('{id}', [EstimateController::class, 'update']);
    Route::delete('{id}', [EstimateController::class, 'destroy']);
});

Route::prefix('estimate_requests')->group(function () {
    Route::get('/', [EstimateRequestController::class, 'index']);
    Route::post('/', [EstimateRequestController::class, 'store']);
    Route::get('{id}', [EstimateRequestController::class, 'show']);
    Route::put('{id}', [EstimateRequestController::class, 'update']);
    Route::delete('{id}', [EstimateRequestController::class, 'destroy']);
});
