<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Emails\Controllers\EmailAccountController;
use App\Modules\Emails\Controllers\EmailMessageController;

Route::prefix('email_accounts')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/', [EmailAccountController::class, 'index'])->name('EmailAccount');
    Route::get('/index', [EmailAccountController::class, 'index'])->name('EmailAccounts');
    Route::get('/{account}/filter', [EmailAccountController::class, 'filter'])->name('EmailAccount.filter');
    Route::get('/{account}/fetch', [EmailAccountController::class, 'fetch'])->name('EmailAccount.fetch');
    Route::get('/{account}/compose', [EmailAccountController::class, 'compose'])->name('EmailAccount.compose');
    Route::get('create', [EmailAccountController::class, 'create'])->name('EmailAccount.create');
    Route::get('{id}/show', [EmailAccountController::class, 'show'])->name('EmailAccount.show');
    Route::get('{id}/edit', [EmailAccountController::class, 'edit'])->name('EmailAccount.edit');
    Route::get('{id}/settings', [EmailAccountController::class, 'settings'])->name('EmailAccount.settings');
    Route::post('/{account}/fetchFolders', [EmailAccountController::class, 'fetchFolders'])->name('EmailAccount.fetchFolders');
    Route::post('/{account}/send_mail', [EmailAccountController::class, 'send_mail'])->name('EmailAccount.send_mail');
    Route::post('/store', [EmailAccountController::class, 'store'])->name('EmailAccount.store');
    Route::post('{id}/update', [EmailAccountController::class, 'update'])->name('EmailAccount.update');
    Route::post('{id}/updateSetting', [EmailAccountController::class, 'updateSetting'])->name('EmailAccount.updateSetting');
    Route::delete('{id}/delete', [EmailAccountController::class, 'destroy'])->name('EmailAccount.delete');
});

Route::prefix('email_messages')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('{account_id}/show/{msg_id}', [EmailMessageController::class, 'showMessage'])->name('EmailMessage.show');
    Route::post('{id}/move/{folder_id}', [EmailMessageController::class, 'moveMessage'])->name('EmailMessage.move');
});
