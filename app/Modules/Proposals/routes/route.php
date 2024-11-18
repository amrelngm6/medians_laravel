<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Proposals\Controllers\ProposalController;

Route::prefix('estimates')->group(function () {
    Route::get('/', [ProposalController::class, 'index']);
    Route::post('/', [ProposalController::class, 'store']);
    Route::get('{id}', [ProposalController::class, 'show']);
    Route::put('{id}', [ProposalController::class, 'update']);
    Route::delete('{id}', [ProposalController::class, 'destroy']);
});

