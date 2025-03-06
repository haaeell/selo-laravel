@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('judul', 'Dashboard')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Jumlah Bayi</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="fw-bold text-primary text-center">
                            {{ $countBayi }}
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card card-success">
                    <div class="card-header">
                        <h4>Jumlah Lansia</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="fw-bold text-success text-center">
                            {{ $countLansia }}
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card card-warning">
                    <div class="card-header">
                        <h4>Jumlah IbuHamil</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="fw-bold text-warning text-center">
                            {{ $countIbuHamil }}
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card card-info">
                    <div class="card-header">
                        <h4>Jumlah Dokumentasi</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="fw-bold text-info text-center">
                            {{ $countDokumentasi }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
