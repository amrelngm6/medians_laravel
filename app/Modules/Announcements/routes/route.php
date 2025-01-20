<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Announcements\Controllers\AnnouncementController;

Route::prefix('announcements')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [AnnouncementController::class, 'index'])->name('Announcement');
    Route::post('/', [AnnouncementController::class, 'store'])->name('Announcement.store');
    Route::post('/filter', [AnnouncementController::class, 'filter'])->name('Announcement.filter');
    Route::post('/store_lead/{leadId}', [AnnouncementController::class, 'store_lead'])->name('Announcement.store_lead');
    Route::delete('{id}', [AnnouncementController::class, 'destroy'])->name('Announcement.delete');
});

// Add Tab menu to Lead Page
Route::prefix('leads')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/announcements', [AnnouncementController::class, 'lead'])->name('Lead.tabs.announcements');
});

// Add Tab menu to Staff Page
Route::prefix('staff')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/announcements', [AnnouncementController::class, 'staff'])->name('Staff.tabs.announcements');
});

// Add Tab menu to projects Page
Route::prefix('projects')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/{id}/announcements', [AnnouncementController::class, 'project'])->name('Projects.tabs.announcements');
});

