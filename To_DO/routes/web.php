<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\TaskControllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'list'])->name('tasks.list');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}/update', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}/destroy', [TaskController::class, 'destroy'])->name('tasks.destroy');