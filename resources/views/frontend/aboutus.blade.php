@extends('layouts.frontend')

@section('content')

<!-- About Start -->
<div class="container-fluid p-5">
    <div class="row gx-5">
        <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100 rounded" src="frontend/img/logo.jpg" style="object-fit: cover;">
            </div>
        </div>
        <div class="col-lg-7">
            @foreach($settings as $setting)
            <div class="mb-4">
                <h5 class="text-primary text-uppercase">About Us</h5>
                <h1 class="display-3 text-uppercase mb-0">Welcome to {{ $setting->name }}.</h1>
            </div>
            <h4 class="text-body mb-4">As a valued newcomer to our fitness family, we thought we’d send across some handy resources to make your experience as rewarding as possible.</h4>
            <p class="mb-4">{{ $setting->welcome }}</p>
            <div class="rounded bg-dark p-5">
                <ul class="nav nav-pills justify-content-between mb-3">
                    <li class="nav-item w-50">
                        <a class="nav-link text-uppercase text-center w-100 active" data-bs-toggle="pill" href="#pills-1">Why Choose us</a>
                    </li>
                    <li class="nav-item w-50">
                        <a class="nav-link text-uppercase text-center w-100" data-bs-toggle="pill" href="#pills-2">About us</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-1">
                    <p class="text-secondary mb-0">We’re perfect for beginners, we'll introduce you to fun, effective routines and valuable fitness knowledge. When you're ready, we can introduce more advanced routines. 

                    Studies show that working out can help build up your body's defenses. This will make you feel more energetic and boost your ability to prevent diseases. Our team will ensure that you achieve results. Our fitness program is created for you to fit your abilities and help you reach your goals. 
                    </p>
                    </div>
                    <div class="tab-pane fade" id="pills-2">
                        <p class="text-secondary mb-0">{{ $setting->about_us }}</p>
                        <!-- mapa san ipao -->
                        <div class="col-lg-12">
                            <iframe class="w-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11567.453066756334!2d124.56464774208092!3d12.06683429917258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3309d930c143df63%3A0xe2b961d14d9afa20!2sSan%20Policarpo%2C%20Calbayog%20City%2C%20Samar!5e1!3m2!1sen!2sph!4v1670729110808!5m2!1sen!2sph"
                                frameborder="0" style="height: 457px; border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- About End -->

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
                    <h1 class="display-5 text-white mb-0" data-toggle="counter-up">4500</h1>
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
                    <h1 class="display-5 text-white mb-0" data-toggle="counter-up">100</h1>
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
                    <h1 class="display-5 text-white mb-0" data-toggle="counter-up">3623</h1>
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
                    <h1 class="display-5 text-white mb-0" data-toggle="counter-up">5000</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

 <!-- Comment Form Start -->
 <div class="comment-area mt-4">
    <div class="card card-body col-md-6">
        <h6 class="card-title">Leave a comment</h6>
        <form action="{{ url('add_comment') }}" method="POST">
            @csrf
            <textarea  name="comment" class="form-control" rows="3" required></textarea>
            <input type="submit" class="btn btn-primary mt-3" value="Comment"/>
        </form>
    </div> 
</div>
<!-- Comment Form End -->
 
 <!-- Comment List Start  -->
<div class="container-fluid p-5">
    <div class="row g-5">
        <div class="col-lg-8">
            <div class="mb-5">
                <h3 class="text-uppercase mb-4">Comments</h3>
                @foreach($comment as $comment)
                <div class="d-flex mb-4">
                    <!-- <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;"> -->
                    <div class="ps-3">
                        <h6><a href="">{{ $comment->name }}</a> <small><i>{{ $comment->created_at->format('m/d/Y') }}</i></small></h6>
                        <p>{{ $comment->comment }}</p>
                            <a href="javascript::void(0);" class="btn btn-sm btn-secondary" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>
                        
                        @foreach($reply as $rep)
                        @if($rep->comment_id == $comment->id )
                        <div class="d-flex ms-5 mb-4">
                            <!-- <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;"> -->
                            <div class="ps-3">
                                <h6><a href="">{{ $rep->name }}</a> <small><i>{{ $rep->created_at->format('m/d/Y') }}</i></small></h6>
                                <p>{{ $rep->reply }}</p>
                                <a href="javascript::void(0);" class="btn btn-sm btn-secondary" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endforeach       
                <!-- reply textbox     -->
                <div class="d-flex ms-5 mb-4">
                    <div class="replyDiv ps-3" style="display: none;">
                        <form action="{{ url('add_reply') }}" method="POST">
                            @csrf
                            <input type="text" id="commentId" name="commentId" hidden="">
                            <textarea placeholder="Add reply" name="reply" style="height:100px; width:500px;" required></textarea>
                            <br>
                            <button type="submit" class="btn btn-sm btn-secondary">Submit</button>
                            <a href="javascript::void(0);" class="btn btn-sm btn-secondary" onClick="reply_close(this)">Close</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Comment List End -->

@endsection