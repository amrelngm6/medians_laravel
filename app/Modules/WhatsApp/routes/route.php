<?php

use Illuminate\Support\Facades\Route;
use App\Modules\WhatsApp\Controllers\ConversationController;
use App\Modules\WhatsApp\Controllers\MessageController;

Route::prefix('wp_conversations')->middleware(['web','auth:staff,superadmin'])->group(function () {
    Route::get('/', [ConversationController::class, 'index'])->name('WhatsApp');
    Route::get('/create', [ConversationController::class, 'create'])->name('WhatsConversation.create');
    Route::get('/{wa_id}/{display_phone_number}/show', [ConversationController::class, 'show'])->name('WhatsConversation.show');
    Route::get('/{id}/edit', [ConversationController::class, 'edit'])->name('WhatsConversation.edit');
    Route::post('/', [ConversationController::class, 'store'])->name('WhatsConversation.store');
    Route::post('/filter', [ConversationController::class, 'filter'])->name('WhatsConversation.filter');
    Route::post('{id}/update', [ConversationController::class, 'update'])->name('WhatsConversation.update');
    Route::delete('{id}/delete', [ConversationController::class, 'destroy'])->name('WhatsConversation.delete');

});

Route::prefix('wp_contacts')->middleware(['web','auth:staff,superadmin'])->group(function () {

});

Route::prefix('wp_messages')->middleware(['web','auth:staff,superadmin'])->group(function () {
    Route::get('/', [MessageController::class, 'index'])->name('WhatsMessages');
    Route::get('/create', [MessageController::class, 'create'])->name('WhatsMessage.create');
    Route::get('/{id}/show', [MessageController::class, 'show'])->name('WhatsMessage.show');
    Route::get('/{id}/edit', [MessageController::class, 'edit'])->name('WhatsMessage.edit');
    Route::post('/', [MessageController::class, 'store'])->name('WhatsMessage.store');
    Route::post('/filter', [MessageController::class, 'filter'])->name('WhatsMessage.filter');
    Route::post('{id}/update', [MessageController::class, 'update'])->name('WhatsMessage.update');
    Route::delete('{id}/delete', [MessageController::class, 'destroy'])->name('WhatsMessage.delete');

});

// Route::prefix('project')->middleware(['web', 'auth:staff'])->group(function () {
//     Route::get('/{id}/expenses', [ConversationController::class, 'project'])->name('Projects.tabs.expenses');
// });