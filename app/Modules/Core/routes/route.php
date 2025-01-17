<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Core\Controllers\RoleController;
use App\Modules\Core\Controllers\BusinessController;
use App\Modules\Core\Controllers\StatusController;
use App\Modules\Core\Controllers\CategoryController;
use Illuminate\Http\Request;
use App\Models\Auth;


Route::prefix('roles')->middleware(['web', 'auth:superadmin,staff'])->group(function () {

    Route::get('/', function () {
        if (Auth::user()) {
            return app(RoleController::class)->index(app()->request);
        }
        return redirect()->route('login')->with('error', 'Unauthorized access.');
    })->name('Role');

    // Route::get('/', [RoleController::class, 'index'])->name('Role');
    Route::get('/create', [RoleController::class, 'create'])->name('Role.create');
    Route::get('/createForStaff', [RoleController::class, 'createForStaff'])->name('Role.create');
    Route::post('/store', [RoleController::class, 'store'])->name('Role.store');
    Route::post('{id}', [RoleController::class, 'update'])->name('Role.update');
    Route::delete('{id}', [RoleController::class, 'destroy'])->name('Role.delete');
    Route::view('/edit_modal/{id}', 'includes.modals.edit-role-modal')->name('Role.edit_modal');

    Route::prefix('{roleId}/permissions')->group(function () {
        Route::get('/', [RoleController::class, 'permissions'])->name('Role.Permissions');
        Route::post('/', [RoleController::class, 'update_permissions'])->name('Permissions.update');
        Route::delete('{id}', [RoleController::class, 'destroy']);
    });
});


/**
 * Business Routes list
 */
Route::prefix('business')->middleware(['web', 'auth:superadmin,staff'])->group(function () {
    Route::get('/all', [BusinessController::class, 'index'])->name('Business');
    Route::get('/create', [BusinessController::class, 'create'])->name('Business.create');
    Route::get('/{business_id}', [BusinessController::class, 'overview'])->name('Business.overview');
    Route::post('/store', [BusinessController::class, 'store'])->name('Business.store');
    Route::post('{business_id}', [BusinessController::class, 'update'])->name('Business.update');
    Route::delete('{business_id}', [BusinessController::class, 'destroy'])->name('Business.delete');
    Route::get('/edit_modal/{business_id}', [BusinessController::class, 'edit'])->name('Business.edit_modal');
});

/**
 * New Subscriber create its own business
 */
Route::prefix('business-subscription')->middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/', [BusinessController::class, 'businessSubscription'])->name('Business.subscription');
    Route::post('/subscribe', [BusinessController::class, 'subscribeBusiness'])->name('Business.subscribe');
});

/**
 * Status of Models Routes
 */
Route::prefix('status_list')->middleware(['web', 'auth:superadmin,staff'])->group(function () {
    Route::get('/', [StatusController::class, 'index'])->name('StatusList');
    Route::post('/', [StatusController::class, 'store'])->name('StatusList.store');
    Route::post('{id}', [StatusController::class, 'update'])->name('StatusList.update');
    Route::delete('{id}', [StatusController::class, 'destroy'])->name('StatusList.delete');
    Route::view('/create_modal', 'includes.modals.new-status-modal')->name('StatusList.create');
    Route::view('/edit_modal/{id}', 'includes.modals.edit-status-modal')->name('StatusList.edit_modal');
});

/**
 * Categories of Models Routes
 */
Route::prefix('categories')->middleware(['web', 'auth:superadmin,staff'])->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('Category');
    Route::post('/', [CategoryController::class, 'store'])->name('Category.store');
    Route::post('{id}', [CategoryController::class, 'update'])->name('Category.update');
    Route::delete('{id}', [CategoryController::class, 'destroy'])->name('Category.delete');
    Route::view('/create_modal', 'includes.modals.new-category-modal')->name('Category.new');
    Route::view('/edit_modal/{id}', 'includes.modals.edit-category-modal')->name('Category.edit_modal');
});
