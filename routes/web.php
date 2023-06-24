<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/task/crea', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/tasks/{task}/dettagli', [TaskController::class, 'show'])->name('tasks.show');
Route::get('/tasks/{task}/modifica', [TaskController::class, 'edit'])->name('tasks.edit');
//
Route::put('/tasks/{task}/verifica', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}/elimina', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::post('/tasks/salva', [TaskController::class, 'store'])->name('tasks.store');