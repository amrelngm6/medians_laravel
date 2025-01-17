<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Items\Controllers\ItemController;
use App\Modules\Items\Controllers\ItemGroupController;

Route::prefix('items')->middleware(['web', 'auth:superadmin,staff'])->group(function () {
    Route::get('/', [ItemController::class, 'index'])->name('Item');
    Route::get('create', [ItemController::class, 'create'])->name('Item.create');
    Route::get('/{id}/edit', [ItemController::class, 'edit'])->name('Item.edit');
    Route::post('/', [ItemController::class, 'store'])->name('Item.store');
    Route::post('/{id}/update', [ItemController::class, 'update'])->name('Item.update');
    Route::delete('/{id}/delete', [ItemController::class, 'destroy'])->name('Item.delete');
    
    Route::prefix('groups')->middleware(['web', 'auth:superadmin,staff'])->group(function () {
        Route::get('/', [ItemGroupController::class, 'index'])->name('ItemGroup');
        Route::get('/create_group/{item_id?}', [ItemGroupController::class, 'create'])->name('ItemGroup.create');
        Route::get('/edit_group/{id}', [ItemGroupController::class, 'edit'])->name('ItemGroup.edit');
        Route::post('/', [ItemGroupController::class, 'store'])->name('ItemGroup.store');
        Route::post('/{id}', [ItemGroupController::class, 'update'])->name('ItemGroup.update');
        Route::delete('/{id}/delete', [ItemGroupController::class, 'destroy'])->name('ItemGroup.delete');
        
    });
});
