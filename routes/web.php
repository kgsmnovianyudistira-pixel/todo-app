<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('todos.index');
});

Route::get('/todos/create', function () {
    return view('todos.create');
});

Route::post('/todos', function () {
    return redirect('/todos')->with('success', 'Todo berhasil ditambahkan!');
});

