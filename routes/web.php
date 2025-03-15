<?php

use Illuminate\Console\View\Components\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/show/{id}', [TaskController::class, 'show'])->name('tasks.show');
Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
// Route::delete('/tasks/{id}', TaskController::class, 'destroy');
// Route::get('/tasks/{id}/edit', TaskController::class, 'edit');
