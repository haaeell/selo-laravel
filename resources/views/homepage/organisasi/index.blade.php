@extends('layouts.homepage')

@section('title', 'Bayi')
@section('judul', 'Bayi')

@section('content')

    <div class="container py-5" id="dokumentasi" style="margin-top: 50px">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-5 fw-semibold">ORGANISASI</h2>
            </div>

            <div class="col-md-4">
                <img src="https://placehold.co/600x400" class="img-fluid" alt="" />
            </div>

            <div class="col-md-8">
                <h4 class="fw-semibold text-start">
                    <span class="text-uppercase">{{ str_replace('-', ' ', $nama) }}</span>
                </h4>
                @if (isset($nama))
                    @switch($nama)
                        @case('kwt')
                            <p>Deskripsi kwt...</p>
                        @break

                        @case('pkk')
                            <p>Deskripsi pkk...</p>
                        @break

                        @case('posyandu')
                            <p>Deskripsi pkk...</p>
                        @break

                        @case('taruna')
                            <p>Deskripsi pkk...</p>
                        @break

                        @default
                            <p>Data tidak ditemukan.</p>
                    @endswitch
                @else
                    <p>Variabel nama tidak tersedia.</p>
                @endif

            </div>
        </div>
    </div>

    @if ($nama == 'posyandu')
        <div class="row d-flex justify-content-center align-items-center mt-5 p-5"
            style="background: linear-gradient(to right, #4d98e3, #3366a0);border-bottom: 1px solid #fff;">
            <p class="text-center text-white">Lorem ipsum dolor sit amet.</p>
            <h3 class="fw-bold text-center text-white mb-5">
                Data Posyandu Windu Sari Desa coba
            </h3>
            <div class="col-md-2 text-center">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="{{ asset('assets/bayi.png') }}" class="card-img-top" style="width: 100px;" alt="">
                        <h6 class="fw-semibold mt-3">
                            Data Bayi
                        </h6>
                        <p>{{ $jumlahBayi }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="{{ asset('assets') }}/ibu.png" class="card-img-top" style="width: 100px;" alt="">
                        <h6 class="fw-semibold mt-3">
                            Data Ibu Hamil
                        </h6>
                        <p>{{ $jumlahIbu }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="{{ asset('assets') }}/nenek.png" class="card-img-top" style="width: 100px;"
                            alt="">
                        <h6 class="fw-semibold mt-3">
                            Data Lansia
                        </h6>
                        <p>{{ $jumlahLansia }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
