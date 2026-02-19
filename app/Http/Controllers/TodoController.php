<?php

namespace App\Http\Controllers;

abstract class TodoController
{
    public function destroy($id)
{
// Untuk sementara, hanya redirect dengan pesan sukses
return redirect('/todos')->with('success', 'Todo berhasil dihapus!');
}
}