@extends('layouts.frontend')

@section('content')
<div class="container-fluid p-5">
    <div class="mb-3 text-center">
        <h5 class="text-primary text-uppercase">Flex Condam Fit</h5>
        <h3 class="display-3 text-uppercase mb-0">"Push harder than yesterday if you want a different tomorrow"</h3>
    </div>

    <div class="container" style="display: flex; width: 1040px; justify-content: space-evenly; flex-wrap: wrap;">
        @forelse($exercises as $work)
            @if($work->category)
        <div class="card" style="margin: 10px; background-color: #fff; border-radius: 10px; box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2); overflow: hidden; width: 300px;">
            <div class="card-header">
                @if($work->exerciseImages->count() > 0)
                    <img src="{{ asset($work->exerciseImages[0]->image) }}" alt="{{ $work->name}}" style="width: 100%; height: 200px; object-fit: cover;">
                @endif
            </div>
            <div class="card-body" style="display: flex; flex-direction: column; justify-content: center; align-items: flex-start; padding: 10px; min-height: 50px;">
                <span class="tag tag-teal" style="background: #cccccc; border-radius: 50px; font-size: 12px; margin: 0; color: #fff; padding: 2px 10px; text-transform: uppercase; cursor: pointer; background-color: #47bcd4;">{{ $work->category->description }}</span>
                    <h4  class="text-uppercase">
                        {{ $work->name }}
                    </h4>
                <p style="font-size: 20px; margin: 0 0 40px;">
                    Reps: {{ $work->description}}&emsp;
                    Sets: {{ $work->small_description}}
                </p>
            </div>
        </div>
        @else
            No Category Available
        @endif
        @empty
            No exercise Available
        @endforelse
    </div>
</div>


<!-- <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap');
    
    *, *:before, *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    
    body {
        margin: 0;
    }
    
    .wk-desk-1{
        width: 8.333333%;
    }
    .wk-desk-2{
        width: 16.666667%;
    }
    .wk-desk-3{
        width: 25%;
    }
    .wk-desk-4{
        width: 33.333333%;
    }
    .wk-desk-5{
        width: 41.666667%;
    }
    .wk-desk-6{
        width: 50%;
    }
    .wk-desk-7{
        width: 58.333333%;
    }
    .wk-desk-8{
        width: 66.666667%;
    }
    .wk-desk-9{
        width: 75%;
    }
    .wk-desk-10{
        width: 83.333333%;
    }
    .wk-desk-11{
        width: 91.666667%;
    }
    .wk-desk-12{
        width: 100%;
    }
    
    @media (max-width: 1024px) {
        .wk-ipadp-1{
        width: 8.333333%;
        }
        .wk-ipadp-2{
        width: 16.666667%;
        }
        .wk-ipadp-3{
        width: 25%;
        }
        .wk-ipadp-4{
        width: 33.333333%;
        }
        .wk-ipadp-5{
        width: 41.666667%;
        }
        .wk-ipadp-6{
        width: 50%;
        }
        .wk-ipadp-7{
        width: 58.333333%;
        }
        .wk-ipadp-8{
        width: 66.666667%;
        }
        .wk-ipadp-9{
        width: 75%;
        }
        .wk-ipadp-10{
        width: 83.333333%;
        }
        .wk-ipadp-11{
        width: 91.666667%;
        }
        .wk-ipadp-12{
        width: 100%;
        }
    }
    
    @media (max-width: 768px) {
        .wk-tab-1{
        width: 8.333333%;
        }
        .wk-tab-2{
        width: 16.666667%;
        }
        .wk-tab-3{
        width: 25%;
        }
        .wk-tab-4{
        width: 33.333333%;
        }
        .wk-tab-5{
        width: 41.666667%;
        }
        .wk-tab-6{
        width: 50%;
        }
        .wk-tab-7{
        width: 58.333333%;
        }
        .wk-tab-8{
        width: 66.666667%;
        }
        .wk-tab-9{
        width: 75%;
        }
        .wk-tab-10{
        width: 83.333333%;
        }
        .wk-tab-11{
        width: 91.666667%;
        }
        .wk-tab-12{
        width: 100%;
        }
    }
    
    @media (max-width: 500px) {
        .wk-mobile-1{
        width: 8.333333%;
        }
        .wk-mobile-2{
        width: 16.666667%;
        }
        .wk-mobile-3{
        width: 25%;
        }
        .wk-mobile-4{
        width: 33.333333%;
        }
        .wk-mobile-5{
        width: 41.666667%;
        }
        .wk-mobile-6{
        width: 50%;
        }
        .wk-mobile-7{
        width: 58.333333%;
        }
        .wk-mobile-8{
        width: 66.666667%;
        }
        .wk-mobile-9{
        width: 75%;
        }
        .wk-mobile-10{
        width: 83.333333%;
        }
        .wk-mobile-11{
        width: 91.666667%;
        }
        .wk-mobile-12{
        width: 100%;
        }
    }
    
        *{
    font-family:Nunito, sans-serif;
    }
    .text-blk{
    margin-top:0px;
    margin-right:0px;
    margin-bottom:0px;
    margin-left:0px;
    line-height:25px;
    }
    .responsive-cell-block{
    min-height:75px;
    }
    .responsive-container-block{
    min-height:75px;
    height:fit-content;
    width:100%;
    display:flex;
    flex-wrap:wrap;
    margin-top:0px;
    margin-right:auto;
    margin-bottom:0px;
    margin-left:auto;
    justify-content:space-evenly;
    }
    .outer-container{
    padding-top:10px;
    padding-right:50px;
    padding-bottom:10px;
    padding-left:50px;
    background-color:rgb(244, 252, 255);
    }
    .inner-container{
    max-width:1320px;
    flex-direction:column;
    align-items:center;
    margin-top:50px;
    margin-right:auto;
    margin-bottom:50px;
    margin-left:auto;
    }
    .section-head-text{
    margin-top:0px;
    margin-right:0px;
    margin-bottom:5px;
    margin-left:0px;
    font-size:35px;
    font-weight:700;
    line-height:48px;
    color:rgb(0, 135, 177);
    margin:0 0 10px 0;
    }
    .section-subhead-text{
    font-size:25px;
    color:rgb(153, 153, 153);
    line-height:35px;
    max-width:470px;
    text-align:center;
    margin-top:0px;
    margin-right:0px;
    margin-bottom:60px;
    margin-left:0px;
    }
    .img-wrapper{
    width:100%;
    }
    .team-card{
    display:flex;
    flex-direction:column;
    align-items:center;
    }
    .social-media-links{
    width:125px;
    display:flex;
    justify-content:space-between;
    }
    .name{
    font-size:25px;
    font-weight:700;
    color:rgb(102, 102, 102);
    margin-top:10px;
    margin-right:0px;
    margin-bottom:5px;
    margin-left:0px;
    }
    .position{
    font-size:25px;
    font-weight:700;
    color:rgb(0, 135, 177);
    margin-top:0px;
    margin-right:0px;
    margin-bottom:30px;
    margin-left:0px;
    }
    .description{
    font-size:15px;
    font-weight:700;
    margin-top:0px;
    margin-right:0px;
    margin-bottom:30px;
    margin-left:0px;
    }
    .team-img{
    width:250px;
    height:250px;
    border-radius: 50%;
    }
    .team-card-container{
    width:280px;
    margin:0 0 40px 0;
    }
    @media (max-width: 500px){
    .outer-container{
        padding:10px 20px 10px 20px;
    }
    .section-head-text{
        text-align:center;
    }
    } 
</style>

<div class="responsive-container-block outer-container">
    <div class="mb-3 text-center">
        <h5 class="text-primary text-uppercase">Flex Condam Fit</h5>
        <h3 class="display-3 text-uppercase mb-0">"Push harder than yesterday if you want a different tomorrow"</h3>
    </div>
        @forelse($exercises as $work)
            @if($work->category)
            <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                <div class="team-card">
                    <div class="img-wrapper">
                        @if($work->exerciseImages->count() > 0)
                            <img src="{{ asset($work->exerciseImages[0]->image) }}" alt="{{ $work->name}}" style="width: 100%; height: 200px; object-fit: cover;">
                        @endif
                    </div>
                    <p class="text-uppercase text-blk name">
                        {{ $work->name }}
                    </p>
                    <p> 
                        Reps: {{ $work->description}}&emsp;
                        Sets: {{ $work->small_description}}</p>
                </div>
            </div>
        @else
            No Category Available
        @endif
        @empty
            No exercise Available
        @endforelse
    </div>
  </div>
</div> -->

<!-- <div class="container-fluid p-5">
    <div class="mb-3 text-center">
        <h5 class="text-primary text-uppercase">Class Schedule</h5>
        <h1 class="display-3 text-uppercase mb-0">Exercise</h1>
    </div>
    <div class="tab-class text-center">
        <div class="tab-content">
            <div class="tab-pane fade show p-0 active">
                <div class="row g-5">
                @foreach($exercises as $work)
                    <div class="col-md-3 col-md-4 col-sm-6">
                        <a href="{{ url('workouts/'.$category->description) }}">
                        <div class="rowlo bg-dark rounded text-center py-5 px-3">
                            @if($work->exerciseImages->count() > 0)
                                <img src="{{ asset($work->exerciseImages[0]->image) }}" alt="{{ $work->name}}" class="position-absolute rounded" style="object-fit: cover; width: 300px; height:300px; margin-left:200px;">
                            @endif
                            <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                            <h1 class="text-uppercase text-primary">hello</h1>
                            <p class="text-uppercase text-secondary mb-0" style="font-size: 11px;">Condam fit</p>
                        </div>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
             @forelse($exercises as $work)
                @if($work->category)
                <div class="container-fluid p-5">
                    <div class="row gx-5">
                        <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                            <div class="position-relative">
                            @if($work->exerciseImages->count() > 0)
                                <img src="{{ asset($work->exerciseImages[0]->image) }}" alt="{{ $work->name}}" class="position-absolute rounded" style="object-fit: cover; width: 300px; height:300px; margin-left:200px;">
                            @endif
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mb-4" style="margin-top: 45px;">
                                <h4 class="text-uppercase">{{ $work->category->description }}</h4>
                                <h1 class="text-primary display-3 text-uppercase mb-0">{{ $work->name }}</h1>
                            </div>
                            <h3 class="text-uppercase mb-4">Reps: {{ $work->description}}</h3>
                            <h3 class="text-uppercase mb-4">Sets: {{ $work->small_description}}</h3>
                        </div>
                    </div>
                </div>
                @else
                    No Category Available
                @endif
            @empty
                No exercise Available
            @endforelse -->
        <!-- </div>
    </div>
</div> --> 

@endsection