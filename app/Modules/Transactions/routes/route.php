<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Transactions\Controllers\TransactionController;

Route::prefix('transactions')->middleware(['web','auth:staff,superadmin'])->group(function () {
    Route::get('/', [TransactionController::class, 'index'])->name('Transaction');
    Route::get('/create', [TransactionController::class, 'create'])->name('Transaction.create');
    Route::get('/{id}/show', [TransactionController::class, 'show'])->name('Transaction.show');
    Route::get('/{id}/edit', [TransactionController::class, 'edit'])->name('Transaction.edit');
    Route::post('/', [TransactionController::class, 'store'])->name('Transaction.store');
    Route::post('/filter', [TransactionController::class, 'filter'])->name('Transaction.filter');
    Route::post('{id}/update', [TransactionController::class, 'update'])->name('Transaction.update');
    Route::delete('{id}/delete', [TransactionController::class, 'destroy'])->name('Transaction.delete');

});
