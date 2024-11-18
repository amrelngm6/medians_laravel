<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Settings\Controllers\SystemSettingController;

Route::prefix('settings')->group(function () {
    Route::get('/system', [SystemSettingController::class, 'index']);
    Route::post('/system', [SystemSettingController::class, 'store']);
    Route::get('system/{id}', [SystemSettingController::class, 'show']);
    Route::put('system/{id}', [SystemSettingController::class, 'update']);
    Route::delete('system/{id}', [SystemSettingController::class, 'destroy']);
});
