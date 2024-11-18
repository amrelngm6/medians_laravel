<?php

use Illuminate\Support\Facades\Route;
use App\Modules\StatusList\Controllers\StatusController;

Route::prefix('status_list')->group(function () {
    Route::get('/', [StatusController::class, 'index']);
    Route::post('/', [StatusController::class, 'store']);
    Route::get('{id}', [StatusController::class, 'show']);
    Route::put('{id}', [StatusController::class, 'update']);
    Route::delete('{id}', [StatusController::class, 'destroy']);
});
