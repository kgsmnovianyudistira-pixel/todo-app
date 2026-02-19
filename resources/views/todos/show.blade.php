@extends('layouts.app')

@section('title', 'Detail Todo')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Detail Todo</h1>
        <a href="/todos" class="btn btn-secondary">Kembali</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h5>{{ $todo['judul'] }}</h5>
        </div>
        <div class="card-body">
            <p><strong>Deskripsi:</strong></p>
            <p>{{ $todo['deskripsi'] ?: 'Tidak ada deskripsi' }}</p>
            
            <p><strong>Status:</strong></p>
            @if($todo['status'] == 'selesai')
                <span class="badge bg-success">Selesai</span>
            @elseif($todo['status'] == 'proses')
                <span class="badge bg-warning">Proses</span>
            @else
                <span class="badge bg-secondary">Belum</span>
            @endif
        </div>
        <div class="card-footer">
            <a href="/todos/{{ $todo['id'] }}/edit" class="btn btn-warning">Edit</a>
            <form method="POST" action="/todos/{{ $todo['id'] }}" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
            </form>
        </div>
    </div>
@endsection
