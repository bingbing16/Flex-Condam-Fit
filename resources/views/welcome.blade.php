<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Flex Condam Fit</title>

        <!-- Fonts -->
        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

        <!-- Styles -->
       
         <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('frontend/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    @livewireStyles
    </head>
    </head>
    <body class="font-sans antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif         
        </div> -->
         <!-- Header Start -->
         <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                @foreach($settings as $set)
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <img src="{{ $set->logo }}" alt="logo" style="width: 120px; height:120px;">
                    <h1 class="m-0 display-6 text-primary text-uppercase" style="position: absolute;">{{ $set->name }}</h1>
                </a>
                @endforeach
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0">flexcondamfit@gmail.com</h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0">+63 953 220 4379</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                @foreach($settings as $set)
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <img src="{{ $set->logo }}" alt="logo" style="width: 60px; height:60px; margin-left: 5px;">
                        <h1 class="m-0 display-4 text-primary text-uppercase">{{ $set->name }}</h1>
                    </a>
                @endforeach
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ url('redirect') }}" class="nav-item nav-link">Home</a>
                            <a href="{{ url('redirect') }}" class="nav-item nav-link ">About Us</a>
                            <a href="{{ url('redirect') }}" class="nav-item nav-link">Workouts</a>
                            <a href="{{ url('redirect') }}" class="nav-item nav-link">Stretching</a>
                            <a href="{{ url('redirect') }}" class="nav-item nav-link">Nutrition</a>
                        </div>
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-lg text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-primary py-md-1 px-md-3 d-none d-lg-inline-block">Log in
                                    <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> -->

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="text-lg py-md-1 px-md-3 d-none d-lg-inline-block">REGISTER</a>
                                    @endif
                                @endauth
                            </div>
                        @endif        
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Header End -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    @foreach($settings as $set)
                        <img class="w-100" src="frontend/img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase">{{ $set->name }}</h5>
                                <h1 class="display-2 text-white text-uppercase mb-md-4">Build Your Body Strong With {{ $set->name }}</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Join Us</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="frontend/img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase">{{ $set->name }}</h5>
                                <h1 class="display-2 text-white text-uppercase mb-md-4">Grow Your Strength With Our Trainers</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Join Us</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Facts Start -->
        <div class="container-fluid bg-dark facts p-5 my-5">
            <div class="row gx-5 gy-4 py-5">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-secondary text-uppercase">Experience</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">65</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-secondary text-uppercase">Our Trainers</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">393</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-secondary text-uppercase">Complete Project</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-secondary text-uppercase">Happy Clients</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        <!-- Footer Start -->        
        <div class="container-fluid bg-dark text-secondary px-5 mt-5">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Rueda St. NwSSU</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">flexcondamfit@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+63 953 220 4379</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="{{ url('redirect') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-secondary mb-2" href="{{ url('redirect') }}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-secondary mb-2" href="{{ url('redirect') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                                <a class="text-secondary mb-2" href="{{ url('redirect') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Stretching</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="{{ url('redirect') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Developers</a>
                                <a class="text-secondary mb-2" href="{{ url('redirect') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Nutrition</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
                        <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                        <h6 class="text-uppercase text-white">Subscribe Our Newsletter</h6>
                        <p class="text-light">Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
            <div class="row gx-5">
                <div class="col-lg-8">
                    <div class="py-lg-4 text-center">
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">   </a>flexcondamfit.online</p>
                    <p class="text-secondary" style="font-size: 11px;">All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="py-lg-4 text-center credit">
                        <p class="text-light mb-0">Designed by <a class="text-light fw-bold" href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
    <!-- Footer End -->



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

        @livewireScripts
        </body>
    </body>
</html>
