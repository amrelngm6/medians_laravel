<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Uploads\Controllers\UploadController;

Route::prefix('uploads')->group(function () {
    Route::get('/', [UploadController::class, 'index']);
    Route::post('/', [UploadController::class, 'store']);
    Route::get('{id}', [UploadController::class, 'show']);
    Route::put('{id}', [UploadController::class, 'update']);
    Route::delete('{id}', [UploadController::class, 'destroy']);
});
