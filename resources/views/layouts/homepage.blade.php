<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Montserrat', sans-serif;
    }

    .navbar {
        padding: 12px 0;
        background-color: #4d98e3;
        backdrop-filter: none;
        transition: background-color 0.3s, backdrop-filter 0.3s;
    }

    .transparent,
    footer {
        background: linear-gradient(to right, #4d98e3, #3366a0);
    }

    .navbar {
        transition: background-color 0.3s, backdrop-filter 0.3s, padding 0.3s;
    }

    .navbar.transparent {
        padding: 15px 0;
    }



    .nav-link {
        color: white;
    }
    #banner {
        position: relative;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
        color: white;
    }

    #background-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    #banner h1 {
        letter-spacing: 0.3em;
        font-size: 4rem;
        font-weight: 700;

    }

    #hero {
        background-color: rgb(241, 246, 252);
    }

    .btn-cta {
        background: linear-gradient(to right, #4d98e3, #3366a0);
        border-radius: 32px;
        color: white;
        padding: 8px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;

        box-shadow: 0 0 5px rgba(77, 152, 227, 0.8);
    }

    .btn-cta:hover {
        background-color: #3366a0;
        background: linear-gradient(to right, #3366a0, #4d98e3);
    }


    /* hero */

    .badge-hero {
        color: #4d98e3;
        font-weight: 600;
        text-shadow: 0 0 2px rgba(77, 152, 227, 0.8);
        font-size: 1rem;

    }

    .title-hero {
        font-weight: 900;
        font-size: 3rem;
    }

    .smile-hero {
        background: linear-gradient(to right, #4d98e3, #3366a0);
        background-clip: text;
        /* Apply gradient to text content */
        -webkit-background-clip: text;
        /* For Safari */
        color: transparent;
        /* Make the text transparent to show the gradient */
        border-bottom: 3px solid #4d98e3;
    }

    .card-features {
        background-color: #c4d6e8;
        color: #3366a0;
        border-radius: 8px;
        padding: 10px;
        font-weight: 600;
        margin-bottom: 7px;
    }

    .card-features:hover {
        background-color: #3366a0;
        color: #fff;
        border-radius: 8px;
    }

    .swiper {
        width: 100%;
        height: 400px;
        border-radius: 32px;

    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .toggle-menu {
        display: none;
        cursor: pointer;
        position: relative;
    }

    .bar {
        width: 30px;
        height: 4px;
        background-color: white;
        margin: 3px 0;
        transition: 0.3s;
    }

    .toggle-menu.active .bar:nth-child(2) {
        opacity: 0;
    }

    .toggle-menu.active .bar:nth-child(1) {
        transform: rotate(-45deg) translate(-5px, 6px);
    }

    .toggle-menu.active .bar:nth-child(3) {
        transform: rotate(45deg) translate(-5px, -6px);
    }

    /* ... (gaya lainnya) ... */

    .scroll-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #3366a0;
        border: 1px solid #fff;
        color: white;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s, visibility 0.3s;
    }

    .scroll-to-top i {
        font-size: 1.5rem;
    }

    /* Show the scroll-to-top button when user scrolls down */
    .show-scroll {
        opacity: 1;
        visibility: visible;
    }


    @media (max-width: 768px) {
        #banner {
            padding: 20px;
            /* Tambahkan padding untuk jarak dari tepi */
            text-align: center;
            /* height: 50vh;  */
        }

        #banner h1 {
            font-size: 3rem;
            /* Ukuran font lebih kecil di perangkat mobile */
        }

        .toggle-menu {
            display: block;
        }

        #navbarNav {
            position: absolute;
            top: 0;
            right: -300px;
            background: linear-gradient(to right, #4d98e3, #3366a0);
            width: 200px;
            height: 320px;
            display: flex;
            flex-direction: column;
            transition: 0.3s;
            z-index: -1;
            border-radius: 32px 0 0 32px;
        }

        #navbarNav.show {
            right: 0;
        }

        .navbar-nav {
            flex-direction: column;
            align-items: center;
            width: 100%;
            padding-top: 70px;
        }

        .nav-link {
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

    }
</style>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="#"><img src="./assets/logo-taruna1.png "
                    style="width: 50px;" alt=""></a>
            <div class="toggle-menu" id="toggleMenu" onclick="toggleNav()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="navbar-nav ms-auto fw-semibold gap-3" id="navbarNav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="organisasiDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Organisasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="organisasiDropdown">
                        <li><a class="dropdown-item" href="{{ route('home.organisasi', ['nama' => 'kwt']) }}">Kelompok Wisata Tani</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.organisasi', ['nama' => 'karang-taruna']) }}">Karang Taruna</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.organisasi', ['nama' => 'posyandu']) }}">Posyandu</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.organisasi', ['nama' => 'pkk']) }}">PKK</a></li>
                    </ul>
                    
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.dokumentasi') }}">Dokumentasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.kontak') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-primary p-3 ">
        <div class="container text-white ">
            <div class="row d-flex justify-content-center align-items-center my-5">
                <div class="col-md-10 text-center">
                    <div class="row  gap-3 justify-content-center align-items-center">
                        <div class="d-flex gap-3 text-center justify-content-center">
                            <a href="#"><i class="bi bi-facebook text-white fw-bold fs-4"></i></a>

                            <a href="#"><i class="bi bi-instagram text-white fw-bold fs-4"></i></a>

                            <a href="#"><i class="bi bi-linkedin text-white fw-bold fs-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center my-5">
                <div class="col-md-10 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore tempora nihil praesentium
                        incidunt voluptatem, expedita ab aut placeat omnis neque.</p>
                    <h4 class="fw-bold">~ POKOKNY INI FOOTER ~</h4>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script>
        function toggleNav() {
            var nav = document.getElementById("navbarNav");
            var toggle = document.getElementById("toggleMenu");
            nav.classList.toggle("show");
            toggle.classList.toggle("active");
        }

        document.addEventListener("click", function(event) {
            var nav = document.getElementById("navbarNav");
            var toggle = document.getElementById("toggleMenu");

            if (!nav.contains(event.target) && !toggle.contains(event.target)) {
                nav.classList.remove("show");
                toggle.classList.remove("active");
            }
        });

        var map = L.map("map").setView([51.505, -0.09], 13);
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(map);

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            loop: true,
        });

        const navbar = document.querySelector(".navbar");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                navbar.classList.add("transparent");
            } else {
                navbar.classList.remove("transparent");
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            const scrollToTopButton = document.getElementById("scrollToTop");

            window.addEventListener("scroll", function() {
                if (window.scrollY > 200) {
                    scrollToTopButton.classList.add("show-scroll");
                } else {
                    scrollToTopButton.classList.remove("show-scroll");
                }
            });

            scrollToTopButton.addEventListener("click", function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            const targetNumber = 2025;
            const counterElement = document.getElementById("counter");

            new Waypoint({
                element: counterElement,
                handler: function() {
                    anime({
                        targets: counterElement,
                        innerHTML: [0, targetNumber],
                        duration: 1500,
                        easing: "linear",
                        round: 1,
                    });
                    this.destroy();
                },
                offset: "bottom-in-view",
            });
        });
    </script>


    @yield('script')
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>


    <script>
        var swiperCard = new Swiper(".swiperCard", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    @if ($errors->any())
        <script>
            let errorMessages = '';
            @foreach ($errors->all() as $error)
                errorMessages += "{{ $error }}\n";
            @endforeach

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: errorMessages,
            });
        </script>
    @endif

    @if (session('success') || session('error'))
        <script>
            $(document).ready(function() {
                var successMessage = "{{ session('success') }}";
                var errorMessage = "{{ session('error') }}";

                if (successMessage) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: successMessage,
                    });
                }

                if (errorMessage) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: errorMessage,
                    });
                }
            });
        </script>
    @endif
</body>

</html>
