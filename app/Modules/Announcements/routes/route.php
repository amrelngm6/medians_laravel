<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Announcements\Controllers\AnnouncementController;

Route::prefix('announcements')->group(function () {
    Route::get('/', [AnnouncementController::class, 'index']);
    Route::post('/', [AnnouncementController::class, 'store']);
    Route::get('{id}', [AnnouncementController::class, 'show']);
    Route::put('{id}', [AnnouncementController::class, 'update']);
    Route::delete('{id}', [AnnouncementController::class, 'destroy']);
});
