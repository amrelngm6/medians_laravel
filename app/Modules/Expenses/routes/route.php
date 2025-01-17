<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Expenses\Controllers\ExpenseController;

Route::prefix('expenses')->middleware(['web','auth:staff,superadmin'])->group(function () {
    Route::get('/', [ExpenseController::class, 'index'])->name('Expense');
    Route::get('/create', [ExpenseController::class, 'create'])->name('Expense.create');
    Route::get('/{id}/show', [ExpenseController::class, 'show'])->name('Expense.show');
    Route::get('/{id}/edit', [ExpenseController::class, 'edit'])->name('Expense.edit');
    Route::post('/', [ExpenseController::class, 'store'])->name('Expense.store');
    Route::post('/filter', [ExpenseController::class, 'filter'])->name('Expense.filter');
    Route::post('{id}/update', [ExpenseController::class, 'update'])->name('Expense.update');
    Route::delete('{id}/delete', [ExpenseController::class, 'destroy'])->name('Expense.delete');

});

Route::prefix('project')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/expenses', [ExpenseController::class, 'project'])->name('Projects.tabs.expenses');
});