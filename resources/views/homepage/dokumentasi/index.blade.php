@extends('layouts.homepage')

@section('title', 'Dokumentasi')
@section('judul', 'Dokumentasi')

@section('content')
    <div class="container py-5" id="dokumentasi" style="margin-top: 50px;">
        <h2 class="text-center my-5 fw-semibold">Dokumentasi</h2>
        <div class="row my-3">
            @foreach ($dokumentasi as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 d-flex flex-column">
                        <img src="{{ asset($item->gambar) }}" 
                            class="card-img-top" 
                            alt="Dokumentasi"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column flex-grow-1">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <span class="text-muted">{{ \Carbon\Carbon::parse($item->tanggal)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</span>
                            <p class="card-text flex-grow-1">
                                {{ \Illuminate\Support\Str::words($item->deskripsi, 10, '...') }}
                            </p>
                            <a href="{{ route('home.dokumentasi.detail', ['id' => $item->id]) }}" class="btn btn-cta mt-auto">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
