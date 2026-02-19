@extends('layouts.app')

@section('title', 'Tambah Todo')

@section('content')
    <h1>Tambah Todo Baru</h1>

    <div class="card mt-4">
        <div class="card-body">
            <form method="POST" action="/todos">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Todo</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="belum">Belum</option>
                        <option value="proses">Proses</option>
                        <option value="selesai">Selesai</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Todo</button>
                <a href="/todos" class="btn btn-secondary">Batal</a>
            </form>

            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
@endsection
