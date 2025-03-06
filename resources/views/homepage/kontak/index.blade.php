@extends('layouts.homepage')

@section('title', 'Bayi')
@section('judul', 'Bayi')

@section('content')
<!-- CONTENT START -->
<div class="container py-5 min-vh-100" id="dokumentasi" style="margin-top: 50px">
    <h2 class="text-center my-5 fw-semibold">
        Kontak Kami
    </h2>

    <section>
        <h2>Informasi Kontak</h2>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th class="fw-semibold">Alamat</th>
                    <td>: Jl. Contoh No. 123, Jakarta, Indonesia</td>
                </tr>
                <tr>
                    <th class="fw-semibold">Email</th>
                    <td>: info@contoh.com</td>
                </tr>
                <tr>
                    <th class="fw-semibold">Telepon</th>
                    <td>: +62 812-3456-7890</td>
                </tr>
            </tbody>
        </table>
    </section>
    
</div>
@endsection
