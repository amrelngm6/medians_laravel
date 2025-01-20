<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Proposals\Controllers\ProposalController;

Route::prefix('proposals')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [ProposalController::class, 'index'])->name('Proposal');
    Route::get('/create', [ProposalController::class, 'create'])->name('Proposal.create');
    Route::get('/create', [ProposalController::class, 'create'])->name('Proposal.create');
    Route::get('{id}/show', [ProposalController::class, 'show'])->name('Proposal.show');
    Route::get('{id}/edit', [ProposalController::class, 'edit'])->name('Proposal.edit');
    Route::post('/filter', [ProposalController::class, 'filter'])->name('Proposal.filter');
    Route::post('/store', [ProposalController::class, 'store'])->name('Proposal.store');
    Route::post('{id}/update', [ProposalController::class, 'update'])->name('Proposal.update');
    Route::delete('{id}', [ProposalController::class, 'destroy'])->name('Proposal.delete');
});


Route::prefix('items')->middleware(['web', 'auth:staff'])->group(function () {
    Route::post('/itemRow', [ProposalController::class, 'itemRow'])->name('Proposal.item-row');
});

// Add Tab menu to projects Page
Route::prefix('projects')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/proposals', [ProposalController::class, 'project'])->name('Projects.tabs.proposals');
});
