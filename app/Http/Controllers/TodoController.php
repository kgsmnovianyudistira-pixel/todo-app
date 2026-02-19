<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Controllers\Controller;
=======
>>>>>>> 620da3e89bc3576e25cfe8bb872cfe796cf96945
use Illuminate\Http\Request;

class TodoController extends Controller
{
<<<<<<< HEAD
    //
=======
    // Data sementara (nanti diganti database)
    private function getTodos()
    {
        return [
            ['id' => 1, 'judul' => 'Belajar Laravel', 'deskripsi' => 'Belajar Lara
vel dari dasar', 'status' => 'selesai'],
            ['id' => 2, 'judul' => 'Membuat aplikasi Todo', 'deskripsi' => 'Membua
t aplikasi todo list sederhana', 'status' => 'proses'],
            ['id' => 3, 'judul' => 'Belajar Git', 'deskripsi' => 'Belajar branchin
g dan pull request', 'status' => 'proses'],
            ['id' => 4, 'judul' => 'Menyelesaikan laporan', 'deskripsi' => 'Lapora
n proyek akhir', 'status' => 'belum'],

        ];
    }
    // Menampilkan form edit
    public function edit($id)
    {
        $todos = $this->getTodos();
        // Cari todo berdasarkan id
        $todo = null;
        foreach ($todos as $item) {
            if ($item['id'] == $id) {
                $todo = $item;
                break;
            }
        }
        // Jika todo tidak ditemukan
        if (!$todo) {
            return redirect('/todos')->with('error', 'Todo tidak ditemukan!');
        }
        return view('todos.edit', ['todo' => $todo]);
    }
    // Memproses update todo
    public function update(Request $request, $id)
    {
        // Untuk sementara, hanya redirect dengan pesan sukses
        return redirect('/todos')->with('success', 'Todo berhasil diupdate!');
    }
>>>>>>> 620da3e89bc3576e25cfe8bb872cfe796cf96945
}
