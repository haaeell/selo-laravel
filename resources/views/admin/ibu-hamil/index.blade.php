@extends('layouts.dashboard')

@section('title', 'Ibu Hamil')
@section('judul', 'Ibu Hamil')

@section('content')
<div class="card shadow border-0">
    <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">Tambah Ibu Hamil</button>
        <table class="table table-bordered mt-4" id="datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ibuHamil as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $data->id }}">Edit</button>
                        <form action="{{ route('ibu-hamil.destroy', $data->id) }}" method="POST" style="display: inline-block;">
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

<!-- Modal Tambah -->
<div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Ibu Hamil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('ibu-hamil.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label>Nama:</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Alamat:</label>
                        <textarea class="form-control" name="alamat" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
@foreach ($ibuHamil as $data)
<div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Ibu Hamil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('ibu-hamil.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label>Nama:</label>
                        <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Alamat:</label>
                        <textarea class="form-control" name="alamat" required>{{ $data->alamat }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection
