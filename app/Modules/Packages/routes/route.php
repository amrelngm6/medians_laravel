<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Packages\Controllers\PackageController;
use App\Modules\Packages\Controllers\PackageSubscriptionController;
use App\Modules\Packages\Controllers\PackageFeatureController;

Route::prefix('packages')->middleware(['web', 'auth:superadmin'])->group(function () {

    Route::get('/', [PackageController::class, 'index'])->name('Packages');
    Route::get('/edit/{id}', [PackageController::class, 'edit'])->name('Package.edit');
    Route::post('/', [PackageController::class, 'store'])->name('Package.store');
    Route::post('/{id}', [PackageController::class, 'update'])->name('Package.update');
    Route::delete('/{id}', [PackageController::class, 'destroy'])->name('Package.delete');
    
    Route::get('/create', [PackageController::class, 'create'])->name('Package.create');
    
    Route::prefix('/{id}/features')->group(function () {
        Route::get('/', [PackageFeatureController::class, 'index'])->name('PackageFeatures');
        Route::post('/update', [PackageFeatureController::class, 'update'])->name('PackageFeature.update');
    });
    
    Route::prefix('subscriptions')->group(function () {
        Route::get('/', [PackageSubscriptionController::class, 'index'])->name('Package Subscriptions');
    });
    
    Route::prefix('transactions')->group(function () {
        Route::get('/', [PackageController::class, 'index'])->name('Package Transactions');
    });
});

Route::prefix('pricing')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [PackageController::class, 'pricing'])->name('Pricing');
});
