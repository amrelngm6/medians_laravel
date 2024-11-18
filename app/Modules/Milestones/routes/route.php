<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Milestones\Controllers\MilestoneController;

Route::prefix('milestones')->group(function () {
    Route::get('/', [MilestoneController::class, 'index']);
    Route::post('/', [MilestoneController::class, 'store']);
    Route::get('{id}', [MilestoneController::class, 'show']);
    Route::put('{id}', [MilestoneController::class, 'update']);
    Route::delete('{id}', [MilestoneController::class, 'destroy']);
});
