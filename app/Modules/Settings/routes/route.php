<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Settings\Controllers\SystemSettingController;
use App\Modules\Settings\Controllers\BusinessSettingController;

Route::prefix('settings')->middleware(['web', 'auth:superadmin'])->group(function() {
    Route::get('/system', [SystemSettingController::class, 'index'])->name('SystemSetting');
    Route::post('/system', [SystemSettingController::class, 'store'])->name('SystemSetting.store');
    Route::post('/system/update', [SystemSettingController::class, 'update'])->name('SystemSetting.update');
    Route::delete('system/{id}', [SystemSettingController::class, 'destroy'])->name('SystemSetting.delete');
    Route::get('basic', [SystemSettingController::class, 'basic'])->name('SystemSetting.basic');
});


Route::prefix('settings')->middleware(['web', 'auth:staff'])->group(function() {
    Route::get('/business', [BusinessSettingController::class, 'index'])->name('BusinessSetting');
    Route::post('/business', [BusinessSettingController::class, 'store'])->name('BusinessSetting.store');
    Route::post('/business/update', [BusinessSettingController::class, 'update'])->name('BusinessSetting.update');
    Route::delete('business/{id}', [BusinessSettingController::class, 'destroy'])->name('BusinessSetting.delete');
});
