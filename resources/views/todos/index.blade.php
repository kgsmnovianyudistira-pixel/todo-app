@extends('layouts.app')

@section('title', 'Daftar Todo')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Daftar Todo</h1>
        <a href="/todos/create" class="btn btn-primary">+ Tambah Todo</a>
    </div>

    @php
        // Data sementara (nanti akan diganti dengan database)
        $todos = [
            ['id' => 1, 'judul' => 'Belajar Laravel', 'status' => 'selesai'],
            ['id' => 2, 'judul' => 'Membuat aplikasi Todo', 'status' => 'proses'],
            ['id' => 3, 'judul' => 'Belajar Git', 'status' => 'proses'],
            ['id' => 4, 'judul' => 'Menyelesaikan laporan', 'status' => 'belum'],
        ];
    @endphp

    @if(count($todos) > 0)
        <div class="list-group">
            @foreach($todos as $todo)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <h5>{{ $todo['judul'] }}</h5>
                        @if($todo['status'] == 'selesai')
                            <span class="badge bg-success">Selesai</span>
                        @elseif($todo['status'] == 'proses')
                            <span class="badge bg-warning">Proses</span>
                        @else
                            <span class="badge bg-secondary">Belum</span>
                        @endif
                    </div>
                    <div>
                        <a href="/todos/{{ $todo['id'] }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="/todos/{{ $todo['id'] }}/edit" class="btn btn-sm btn-warning">Edit</a>
                        <form method="POST" action="/todos/{{ $todo['id'] }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">Belum ada todo. Yuk tambah todo pertama!</div>
    @endif
@endsection
