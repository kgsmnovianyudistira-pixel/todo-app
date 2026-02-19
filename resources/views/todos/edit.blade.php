@extends('layouts.app')
@section('title', 'Edit Todo')

@section('content')
<h1>Edit Todo</h1>
<div class="card mt-4">
    <div class="card-body">
        <form method="POST" action="/todos/{{ $todo['id'] }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Todo</label>
                <input type="text" class="form-control" id="judul" name="judul
" value="{{ $todo['judul'] }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"
                    rows="3">{{ $todo['deskripsi'] }}</textarea>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="belum" {{ $todo['status'] == 'belum' ? 'sel
ected' : '' }}>Belum</option>
                    <option value="proses" {{ $todo['status'] == 'proses' ? 's
elected' : '' }}>Proses</option>
                    <option value="selesai" {{ $todo['status'] == 'selesai' ?
'selected' : '' }}>Selesai</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Todo</button>
            <a href="/todos" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection