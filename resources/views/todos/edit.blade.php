@extends('layouts.app')
@section('title', 'Edit Todo')

@section('content')
<h1>Edit Todo</h1>
<div class="card mt-4">
    <div class="card-body">
        <form method="POST" action="{{ route('todos.update', $todo) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Todo</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $todo->judul) }}" required>
                @error('judul')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $todo->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="belum" @selected(old('status', $todo->status) === 'belum')>Belum</option>
                    <option value="proses" @selected(old('status', $todo->status) === 'proses')>Proses</option>
                    <option value="selesai" @selected(old('status', $todo->status) === 'selesai')>Selesai</option>
                </select>
                @error('status')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Todo</button>
            <a href="{{ route('todos.index') }}" class="btn btn-secondary">Batal</a>
        </form>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>
@endsection
