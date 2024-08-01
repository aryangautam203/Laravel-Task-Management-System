<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[TaskController::class,'index'])->name('tasks.index');
Route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');
Route::post('/tasks/store',[TaskController::class,'store'])->name('tasks.store');
Route::get('tasks/{id}/edit',[TaskController::class,'edit']);
Route::put('tasks/{id}/update',[TaskController::class,'update']);
Route::delete('/tasks/{id}/delete',[TaskController::class,'destroy']);
