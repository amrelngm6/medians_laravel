<?php

use Illuminate\Support\Facades\Route;
use App\Modules\NLP\Controllers\HuggFaceController;

Route::prefix('hugging_face')->middleware(['web','auth:staff,superadmin'])->group(function () {
    Route::get('/', [HuggFaceController::class, 'index'])->name('HuggFace');
    Route::get('/create', [HuggFaceController::class, 'create'])->name('HuggFace.create');
    Route::get('/{id}/show', [HuggFaceController::class, 'show'])->name('HuggFace.show');
    Route::get('/{id}/edit', [HuggFaceController::class, 'edit'])->name('HuggFace.edit');
    Route::post('/filter', [HuggFaceController::class, 'filter'])->name('HuggFace.filter');
    Route::post('{id}/update', [HuggFaceController::class, 'update'])->name('HuggFace.update');
    Route::delete('{id}/delete', [HuggFaceController::class, 'destroy'])->name('HuggFace.delete');
    
    Route::post('/', [HuggFaceController::class, 'generateText'])->name('HuggFace.store');
    Route::post('/generateImage', [HuggFaceController::class, 'generateImage'])->name('HuggFace.image');
    Route::post('/generateImageFromImage', [HuggFaceController::class, 'generateImageFromImage'])->name('HuggFace.img2img');
    Route::post('/with-context', [HuggFaceController::class, 'generateTextTwoInputs'])->name('HuggFace.context');
    Route::post('/deepSeek', [HuggFaceController::class, 'deepSeek'])->name('DeepSeek.store');
});
