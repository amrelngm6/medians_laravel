<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Tickets\Controllers\TicketController;

Route::prefix('tickets')->middleware(['web','auth:staff,superadmin'])->group(function () {
    Route::get('/', [TicketController::class, 'index'])->name('Tickets');
    Route::get('/', [TicketController::class, 'index'])->name('Ticket');
    Route::get('create', [TicketController::class, 'create'])->name('Ticket.create');
    Route::get('{id}/show', [TicketController::class, 'show'])->name('Ticket.show');
    Route::post('filter', [TicketController::class, 'filter'])->name('Ticket.filter');
    Route::post('/store', [TicketController::class, 'store'])->name('Ticket.store');
    Route::post('{id}/update', [TicketController::class, 'update'])->name('Ticket.update');
    Route::delete('{id}/delete', [TicketController::class, 'destroy'])->name('Ticket.delete');
   
    Route::get('/{id}/edit_field', [TicketController::class, 'edit_assignee_field'])->name('Ticket.edit_assignee_field');
});

Route::prefix('status_list')->middleware(['web', 'auth:superadmin,staff'])->group(function () {
    Route::get('/{id}/edit_field', [TicketController::class, 'edit_status_field'])->name('StatusList.edit_field_ticket');
});
Route::prefix('priorities')->middleware(['web', 'auth:superadmin,staff'])->group(function () {
    Route::get('/{id}/edit_priority_field', [TicketController::class, 'edit_priority_field'])->name('Priority.edit_field');
});