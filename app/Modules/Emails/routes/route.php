<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Emails\Controllers\EmailAccountController;
use App\Modules\Emails\Controllers\EmailMessageController;

Route::prefix('email_accounts')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/', [EmailAccountController::class, 'index'])->name('EmailAccount');
    Route::get('/index', [EmailAccountController::class, 'index'])->name('EmailAccounts');
    Route::get('/{account}/filter', [EmailAccountController::class, 'filter'])->name('EmailAccount.filter');
    Route::get('/{account}/fetch', [EmailAccountController::class, 'fetch'])->name('EmailAccount.fetch');
    Route::get('create', [EmailAccountController::class, 'create'])->name('EmailAccount.create');
    Route::get('{id}/show', [EmailAccountController::class, 'show'])->name('EmailAccount.show');
    Route::get('{id}/edit', [EmailAccountController::class, 'edit'])->name('EmailAccount.edit');
    Route::get('{id}/settings', [EmailAccountController::class, 'settings'])->name('EmailAccount.settings');
    Route::post('/{account}/fetchFolders', [EmailAccountController::class, 'fetchFolders'])->name('EmailAccount.fetchFolders');
    Route::post('/store', [EmailAccountController::class, 'store'])->name('EmailAccount.store');
    Route::post('{id}/update', [EmailAccountController::class, 'update'])->name('EmailAccount.update');
    Route::post('{id}/updateSetting', [EmailAccountController::class, 'updateSetting'])->name('EmailAccount.updateSetting');
    Route::delete('{id}/delete', [EmailAccountController::class, 'destroy'])->name('EmailAccount.delete');
    Route::delete('{id}/deleteFolder/{folder}', [EmailAccountController::class, 'deleteFolder'])->name('EmailAccount.deleteFolder');
});

Route::prefix('email_messages')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/{account}/compose', [EmailMessageController::class, 'compose'])->name('EmailMessage.compose');
    Route::post('/{account}/send_mail', [EmailMessageController::class, 'send_mail'])->name('EmailMessage.send_mail');
    Route::get('{account_id}/show/{msg_id}', [EmailMessageController::class, 'showMessage'])->name('EmailMessage.show');
    Route::post('{id}/move/{folder_id}', [EmailMessageController::class, 'moveMessage'])->name('EmailMessage.move');
    Route::delete('{id}/deleteMsg', [EmailMessageController::class, 'destroy'])->name('EmailMessage.delete');
});
