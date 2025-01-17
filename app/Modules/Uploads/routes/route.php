<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Uploads\Controllers\UploadController;

Route::prefix('uploads')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/', [UploadController::class, 'index'])->name('Upload');
    Route::post('/', [UploadController::class, 'store'])->name('Uploads.store');
    Route::get('{id}', [UploadController::class, 'show'])->name('Uploads.show');
    Route::get('{id}/download', [UploadController::class, 'download'])->name('Uploads.download');
    Route::post('filter', [UploadController::class, 'filter'])->name('Uploads.filter');
    Route::post('{id}/update', [UploadController::class, 'update'])->name('Uploads.update');
    Route::delete('{id}/delete', [UploadController::class, 'destroy'])->name('Uploads.delete');
});

// Add Tab menu to projects Page
Route::prefix('project')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/files', [UploadController::class, 'project'])->name('Projects.tabs.files');
});

