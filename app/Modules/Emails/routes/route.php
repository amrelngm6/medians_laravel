<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Emails\Controllers\EmailAccountController;

Route::prefix('email_accounts')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/', [EmailAccountController::class, 'index'])->name('EmailAccount');
    Route::get('/index', [EmailAccountController::class, 'index'])->name('EmailAccounts');
    Route::get('/{account}/filter', [EmailAccountController::class, 'filter'])->name('EmailAccount.filter');
    Route::get('/{account}/fetch', [EmailAccountController::class, 'fetch'])->name('EmailAccount.fetch');
    Route::get('create', [EmailAccountController::class, 'create'])->name('EmailAccount.create');
    Route::get('{id}/show', [EmailAccountController::class, 'show'])->name('EmailAccount.show');
    Route::get('{id}/edit', [EmailAccountController::class, 'edit'])->name('EmailAccount.edit');
    Route::post('/', [EmailAccountController::class, 'store'])->name('EmailAccount.store');
    Route::post('{id}', [EmailAccountController::class, 'update'])->name('EmailAccount.update');
    Route::delete('{id}', [EmailAccountController::class, 'destroy'])->name('EmailAccount.delete');
});
