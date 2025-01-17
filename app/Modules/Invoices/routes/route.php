<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Invoices\Controllers\InvoiceController;

Route::prefix('invoices')->middleware(['web','auth:superadmin,staff'])->group(function () {
    Route::get('/', [InvoiceController::class, 'index'])->name('Invoice');
    Route::get('create', [InvoiceController::class, 'create'])->name('Invoice.create');
    Route::get('{id}/show', [InvoiceController::class, 'show'])->name('Invoice.show');
    Route::post('/', [InvoiceController::class, 'store'])->name('Invoice.store');
    Route::post('/filter', [InvoiceController::class, 'filter'])->name('Invoice.filter');
    Route::post('{id}', [InvoiceController::class, 'update'])->name('Invoice.update');
    Route::delete('{id}', [InvoiceController::class, 'destroy'])->name('Invoice.delete');

});


// Add Tab menu to projects Page
Route::prefix('projects')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/invoices', [InvoiceController::class, 'project'])->name('Projects.tabs.invoices');
});

