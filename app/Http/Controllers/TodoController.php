<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'min:3', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'status' => ['required', 'in:belum,proses,selesai'],
        ]);

        Todo::create($validated);

        return redirect()->route('todos.index')->with('success', 'Todo berhasil ditambahkan');
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'min:3', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'status' => ['required', 'in:belum,proses,selesai'],
        ]);

        $todo->update($validated);

        return redirect()->route('todos.show', $todo)->with('success', 'Todo berhasil diupdate');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'Todo berhasil dihapus');
    }

}
