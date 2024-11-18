<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Contracts\Controllers\ContractController;

Route::prefix('contracts')->group(function () {
    Route::get('/', [ContractController::class, 'index']);
    Route::post('/', [ContractController::class, 'store']);
    Route::get('{id}', [ContractController::class, 'show']);
    Route::put('{id}', [ContractController::class, 'update']);
    Route::delete('{id}', [ContractController::class, 'destroy']);
});
