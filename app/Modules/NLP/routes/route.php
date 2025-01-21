<?php

use Illuminate\Support\Facades\Route;
use App\Modules\NLP\Controllers\HuggFaceController;

Route::prefix('hugging_face')->middleware(['web','auth:staff,superadmin'])->group(function () {
    Route::get('/', [HuggFaceController::class, 'index'])->name('HuggFace');
    Route::get('/create', [HuggFaceController::class, 'create'])->name('HuggFace.create');
    Route::get('/{id}/show', [HuggFaceController::class, 'show'])->name('HuggFace.show');
    Route::get('/{id}/edit', [HuggFaceController::class, 'edit'])->name('HuggFace.edit');
    Route::post('/', [HuggFaceController::class, 'store'])->name('HuggFace.store');
    Route::post('/filter', [HuggFaceController::class, 'filter'])->name('HuggFace.filter');
    Route::post('{id}/update', [HuggFaceController::class, 'update'])->name('HuggFace.update');
    Route::delete('{id}/delete', [HuggFaceController::class, 'destroy'])->name('HuggFace.delete');

});
