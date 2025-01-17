<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Menu\Controllers\MenuController;

Route::prefix('menus')->middleware(['web','auth:superadmin,staff'])->group(function () {
    Route::get('/', [MenuController::class, 'index'])->name('Menu');
    Route::post('/', [MenuController::class, 'store'])->name('Menu.store');
    Route::get('{id}', [MenuController::class, 'show']);
    Route::put('{id}', [MenuController::class, 'update'])->name('Menu.update');
    Route::delete('{id}', [MenuController::class, 'destroy'])->name('Menu.delete');
});
