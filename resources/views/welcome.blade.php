@extends('layouts.homepage')

@section('content')
    <div id="banner">
        <img src="{{ asset('assets/banner.jpg ')}}" alt="Image" id="background-image">
        <div class="col-md-6">
            <h1 class="fw-bold text-center">
                PADUKUHAN SELO
            </h1>

        </div>
        <div class="text-center mb-3 fw-bold fs-3" id="counter">0</div>
        <div class="col-md-4 col-9 text-center">
            <p style="font-size: 14px;">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum nulla assumenda placeat
            </p>
            <a href="#sejarah " data-aos="fade-left" class="btn btn-cta btn-primary mb-3">Lebih lengkap <i
                    class="bi bi-arrow-down-circle-fill"></i></a>
        </div>
    </div>
    <div class="container py-5">

        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <h3 class="fw-semibold mb-3 text-center fw-semibold">Lokasi <i class="bi bi-geo-fill text-danger"></i>
                    </h3>
                    <p class="text-center">Lorem ipsum dolor sit amet.</p>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-md-10 rounded shadow py-3 mb-5" style="border-radius: 32px;">
                            <div id="map" style="width: 100%; height: 400px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="fw-semibold mb-3 text-center fw-semibold"> <i
                            class="bi bi-telephone-fill text-danger"></i>Penjelasan Map</h3>
                    <p class="text-center">Lorem ipsum dolor sit amet. Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Nostrum esse maiores, impedit cumque omnis at assumenda aliquid laudantium enim natus.</p>
                </div>
            </div>
        </div>

        <!-- FEATURE -->
        <div class="container mb-5" id="galery">
            <h2 class="text-center my-5 fw-semibold">Organisasi</h2>
            <div class="swiper mySwiper shadow">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./assets/logo-taruna1.png" class="p-5"
                            style="width: 80%;height: auto;object-fit: contain;" alt=""></div>
                    <div class="swiper-slide"><img src="./assets/logo-taruna1.png" class="p-5"
                            style="width: 80%;height: auto;object-fit: contain;" alt=""></div>
                    <div class="swiper-slide"><img src="../assets/logo-taruna1.png" class="p-5"
                            style="width: 80%;height: auto;object-fit: contain;" alt=""></div>
                    <div class="swiper-slide"><img src="../assets/logo-taruna1.png" class="p-5"
                            style="width: 80%;height: auto;object-fit: contain;" alt=""></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>



        <div class="scroll-to-top" id="scrollToTop">
            <i class="bi bi-arrow-up-short"></i>
        </div>


    </div>
@endsection
