<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Todos\Controllers\TodoController;

Route::prefix('todo')->middleware(['web', 'auth:staff,superadmin'])->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('Todo');
    Route::get('/index', [TodoController::class, 'index'])->name('ToDo');
    Route::get('create', [TodoController::class, 'create'])->name('Todo.create');
    Route::get('{id}/show', [TodoController::class, 'show'])->name('Todo.show');
    Route::get('{id}/edit', [TodoController::class, 'edit'])->name('Todo.edit');
    Route::post('/', [TodoController::class, 'store'])->name('Todo.store');
    Route::post('{id}', [TodoController::class, 'update'])->name('Todo.update');
    Route::delete('{id}', [TodoController::class, 'destroy'])->name('Todo.delete');
});
