@extends('layouts.dashboard')

@section('title', 'Edit Dokumentasi')
@section('judul', 'Edit Dokumentasi')

@section('content')
<div class="card shadow border-0">
    <div class="card-body">
        <form action="{{ route('dokumentasi.update', $dokumentasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>Judul:</label>
                        <input type="text" class="form-control" name="judul" value="{{ $dokumentasi->judul }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Deskripsi:</label>
                        <textarea class="form-control" name="deskripsi" rows="4" required>{{ $dokumentasi->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>Gambar:</label>
                        <input type="file" class="form-control" name="gambar" accept="image/*">
                        <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar</small>
                        <br>
                        <td><img src="{{ asset($dokumentasi->gambar) }}" width="100" class="mt-2" alt="Dokumentasi"></td>
                    </div>
                    <div class="form-group mb-3">
                        <label>Tanggal:</label>
                        <input type="date" class="form-control" name="tanggal" value="{{ $dokumentasi->tanggal }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('dokumentasi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
