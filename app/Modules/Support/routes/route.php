<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Support\Controllers\KnowledgeBaseController;

Route::prefix('knowledge_base')->group(function () {
    Route::get('/', [KnowledgeBaseController::class, 'index']);
    Route::post('/', [KnowledgeBaseController::class, 'store']);
    Route::get('{id}', [KnowledgeBaseController::class, 'show']);
    Route::put('{id}', [KnowledgeBaseController::class, 'update']);
    Route::delete('{id}', [KnowledgeBaseController::class, 'destroy']);
});
