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

// Halaman edit todo
Route::get('/todos/{id}/edit', [TodoController::class, 'edit']);
// Proses update todo
Route::put('/todos/{id}', [TodoController::class, 'update']);