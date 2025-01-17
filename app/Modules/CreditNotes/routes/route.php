<?php

use Illuminate\Support\Facades\Route;
use App\Modules\CreditNotes\Controllers\CreditNoteController;

Route::prefix('credit_notes')->middleware(['web','auth:staff,superadmin'])->group(function () {
    Route::get('/', [CreditNoteController::class, 'index'])->name('CreditNote');
    Route::get('/{invoiceId}/create', [CreditNoteController::class, 'create'])->name('CreditNote.create');
    Route::get('/{id}/show', [CreditNoteController::class, 'show'])->name('CreditNote.show');
    Route::get('/{id}/edit', [CreditNoteController::class, 'edit'])->name('CreditNote.edit');
    Route::post('/', [CreditNoteController::class, 'store'])->name('CreditNote.store');
    Route::post('/itemRow', [CreditNoteController::class, 'itemRow'])->name('CreditNote.item-row');
    Route::post('/filter', [CreditNoteController::class, 'filter'])->name('CreditNote.filter');
    Route::post('{id}/update', [CreditNoteController::class, 'update'])->name('CreditNote.update');
    Route::delete('{id}/delete', [CreditNoteController::class, 'destroy'])->name('CreditNote.delete');
});
