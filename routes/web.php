<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', function () {
    return view('todos.index');
});

Route::get('/todos/create', function () {
    return view('todos.create');
});

Route::post('/todos', function () {
    return redirect('/todos')->with('success', 'Todo berhasil ditambahkan!');
});

Route::get('/todos', [TodoController::class, 'index']);
Route::get('/todos/{id}', [TodoController::class, 'show']);
Route::delete('/todos/{id}', [TodoController::class, 'destroy']);
Route::get('/todos/{id}/edit', [TodoController::class, 'edit']);
Route::put('/todos/{id}', [TodoController::class, 'update']);
