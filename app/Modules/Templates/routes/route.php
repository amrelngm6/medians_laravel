<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Templates\Controllers\TemplateController;

Route::prefix('templates')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/', [TemplateController::class, 'index'])->name('Templates');
    Route::post('/', [TemplateController::class, 'store'])->name('Templates.store');
    Route::get('create', [TemplateController::class, 'create'])->name('Templates.create');
    Route::get('{id}/show', [TemplateController::class, 'show'])->name('Templates.show');
    Route::get('{id}/edit', [TemplateController::class, 'edit'])->name('Templates.edit');
    Route::post('{id}', [TemplateController::class, 'update'])->name('Templates.update');
    Route::delete('{id}', [TemplateController::class, 'destroy'])->name('Templates.delete');
    Route::post('/ajax', [TemplateController::class, 'ajax'])->name('Templates.ajax');

});
