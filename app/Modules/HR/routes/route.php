<?php

use Illuminate\Support\Facades\Route;
use App\Modules\HR\Controllers\EmailAccountController;
use App\Modules\HR\Controllers\EmailMessageController;

Route::prefix('attendance')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
});

Route::prefix('leaved')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
});
