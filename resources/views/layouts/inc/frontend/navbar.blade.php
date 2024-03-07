<div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                @foreach($settings as $set)
                <a href="{{ url('redirect') }}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <img src="{{ $set->logo }}" alt="logo" style="width: 120px; height:120px;">
                    <h1 class="text-primary text-uppercase" style="position: absolute;">{{ $set->name }}</h1>
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
                    <a href="{{ url('redirect') }}" class="navbar-brand d-block d-lg-none">
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
                            <a href="{{ url('about-us') }}" class="nav-item nav-link ">About Us</a>
                            <a href="{{ url('workouts') }}" class="nav-item nav-link">Workouts</a>
                            <a href="{{ url('stretchings') }}" class="nav-item nav-link">Stretching</a>
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                    <a href="detail.html" class="dropdown-item">Blog Detail</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                </div>
                            </div> -->
                            <a href="{{ url('food') }}" class="nav-item nav-link">Nutrition</a>
                        </div>
                            <li class="nav-item nav-profile dropdown" style="list-style-type: none;">
                            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="nav-profile-text">
                                @if (Auth::user()->profile_photo_path)
                                    <img class="h-8 w-8 rounded-full object-cover" src="/storage/{{Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" style="height:40px; width:40px; border-radius: 50%;"/>
                                @else
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" style="height:40px; width:40px; border-radius: 50%;" /> 
                                @endif
                                <p class="mb-1 text-black" style="display: inline; margin-left: 5px;"> {{ Auth::user()->name }}</p>
                                </div>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                <!-- Account Management -->
                                <a class="dropdown-item" href="{{ route('profile.show') }}">
                                <i class="mdi mdi-cached me-2 text-success"></i>{{ __('Profile') }}
                                </a>

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" id="logout-form" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout me-2 text-primary"></i> {{ __('Logout') }}
                                    </a>
                                </form>
                            </div>
                            </li>
                        <!-- <div class="nav-profile-text">
                            <p class="mb-1 text-black"> {{ Auth::user()->name }}</p>
                        </div> -->
                        <!-- <a href="#" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Join Us</a> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>  