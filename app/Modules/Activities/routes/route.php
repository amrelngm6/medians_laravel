<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Activities\Controllers\ActivityController;

Route::prefix('activities')->middleware(['web','auth:staff,superadmin'])->group(function () {
    Route::get('/', [ActivityController::class, 'index'])->name('Activity');
    Route::post('/filter', [ActivityController::class, 'filter'])->name('Activity.filter');
    Route::delete('{id}/delete', [ActivityController::class, 'destroy'])->name('Activity.delete');

});
