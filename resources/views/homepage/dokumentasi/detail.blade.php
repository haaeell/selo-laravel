@extends('layouts.homepage')

@section('title', 'Detail Dokumentasi')
@section('judul', 'Detail Dokumentasi')

@section('content')
    <div class="container py-5">
        <h2 class="text-center my-5 fw-semibold">Detail Dokumentasi</h2>
        <div class="row justify-content-center" >
            <div class="col-md-10">
                <div class="card">
                    <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : 'https://placehold.co/600x400' }}" width="100" class="card-img-top" alt="Dokumentasi">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <span>{{ \Carbon\Carbon::parse($item->tanggal)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</span>
                        <p class="card-text">{{ $item->deskripsi }}</p>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
