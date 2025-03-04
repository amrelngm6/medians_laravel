<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Deals\Controllers\DealController;

Route::prefix('deals')->middleware(['web', 'auth:superadmin,staff'])->group(function () {
    Route::get('/', [DealController::class, 'index'])->name('Deal');
    Route::get('/{id}/new-stage', [DealController::class, 'create_stage'])->name('Deal.addStage');
    Route::get('/{id}/edit-stage', [DealController::class, 'edit_stage'])->name('DealStage.edit');
    Route::get('/{id}/edit_field', [DealController::class, 'edit_task_field'])->name('Deal.edit_field');
    Route::get('/create', [DealController::class, 'create'])->name('Deal.create');
    Route::get('{id}', [DealController::class, 'overview'])->name('Deal.show');
    Route::post('/', [DealController::class, 'store'])->name('Deal.store');
    Route::post('{id}/update', [DealController::class, 'update'])->name('Deal.update');
    Route::post('{id}/update-stage', [DealController::class, 'updateStage'])->name('DealStage.update');
    Route::post('/{id}/add-stage', [DealController::class, 'storeStage'])->name('Deal.store-stage');
    Route::delete('{id}/delete', [DealController::class, 'destroy'])->name('Deal.delete');
    Route::delete('{id}/delete-stage', [DealController::class, 'destroyStage'])->name('DealStage.delete');
    
    // Page Tabs
    Route::get('/{id}/overview', [DealController::class, 'overview'])->name('Deal.tabs.overview');
    Route::get('/{id}/edit', [DealController::class, 'edit'])->name('Deal.tabs.edit');
    Route::get('/convert-lead-modal/{lead_id}', [DealController::class, 'convertLeadModal'])->name('Deal.convert_lead_modal');

    // Conver lead to Deal
    Route::post('/convert-lead/{lead_id}', [DealController::class, 'convertLead'])->name('Deal.convert_lead');
});

// Add Tab menu to deal Page for Tasks
Route::prefix('deals')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/deal_task', [DealController::class, 'deal_task'])->name('Tasks.deal_task');
    Route::get('/{id}/create_deal_task', [DealController::class, 'create_deal_task'])->name('Deal.tasks.create');
    Route::get('/{id}/tasks', [DealController::class, 'tasks'])->name('Deal.tabs.tasks');
    Route::get('{id}/create_task', [DealController::class, 'create_project_task'])->name('Deal.create_task');
    Route::post('/{id}/filter_tasks', [DealController::class, 'filter_tasks'])->name('Deal.tasks.filter');
});