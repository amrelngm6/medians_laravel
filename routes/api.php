<?php

use Illuminate\Support\Facades\Route;
use App\Modules\WhatsApp\Controllers\MessageController;



Route::middleware('web', 'api')->group(function () {
    Route::post('webhooks/medians_wp', [MessageController::class, 'webhook'])->name('webhooks2');
});