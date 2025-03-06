@extends('layouts.dashboard')

@section('title', 'Tambah Dokumentasi')
@section('judul', 'Tambah Dokumentasi')

@section('content')
<div class="card shadow border-0">
    <div class="card-body">
        <form action="{{ route('dokumentasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>Judul:</label>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Deskripsi:</label>
                        <textarea class="form-control" name="deskripsi" rows="4" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>Gambar:</label>
                        <input type="file" class="form-control" name="gambar" accept="image/*" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Tanggal:</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('dokumentasi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
