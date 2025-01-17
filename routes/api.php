<?php

use Illuminate\Support\Facades\Route;
use App\Modules\WhatsApp\Controllers\MessageController;



Route::post('/webhooks/medians_wp', [MessageController::class, 'webhook']);
Route::get('/webhooks/medians_wp2', [MessageController::class, 'webhook']);
Route::get('/api/webhooks/medians_wp2', [MessageController::class, 'webhook']);