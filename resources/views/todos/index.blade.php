@extends('layouts.app')

@section('title', 'Daftar Todo')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>List Todo</h1>
        <a href="{{ route('todos.create') }}" class="btn btn-primary">Tambah Todo</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(($todos ?? collect())->count() > 0)
        <div class="list-group">
            @foreach($todos as $todo)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <h5>{{ $todo->judul }}</h5>
                        @if($todo->status === 'selesai')
                            <span class="badge bg-success">Selesai</span>
                        @elseif($todo->status === 'proses')
                            <span class="badge bg-warning">Proses</span>
                        @else
                            <span class="badge bg-secondary">Belum</span>
                        @endif
                    </div>
                    <div>
                        <a href="{{ route('todos.show', $todo) }}" class="btn btn-sm btn-secondary">Detail</a>
                        <a href="{{ route('todos.edit', $todo) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form method="POST" action="{{ route('todos.destroy', $todo) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">Belum ada todolist nih isi bro</div>
    @endif
@endsection
