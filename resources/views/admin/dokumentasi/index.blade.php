@extends('layouts.dashboard')

@section('title', 'Dokumentasi')
@section('judul', 'Dokumentasi')

@section('content')
<div class="card shadow border-0">
    <div class="card-body">
        <a href="{{ route('dokumentasi.create') }}" class="btn btn-primary mb-3">Tambah Dokumentasi</a>
        <table class="table table-bordered mt-4" id="datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dokumentasi as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->deskripsi }}</td>
                    <td><img src="{{ asset($data->gambar) }}" width="100" alt="Dokumentasi"></td>
                    <td>{{ $data->tanggal }}</td>
                    <td>
                        <a href="{{ route('dokumentasi.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('dokumentasi.destroy', $data->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
