@extends('layouts.frontend')

@section('content')
<div class="container-fluid p-5">
    <div class="text-center">
        <h5 class="text-primary text-uppercase">Flex Condam Fit</h5>
        <h3 class="display-3 text-uppercase mb-0">"Take care of your body. It’s the only place you have to live."</h3>
    </div>

    <div class="container" style="display: flex; width: 1040px; justify-content: space-evenly; flex-wrap: wrap;">
        @forelse($food as $work)
            @if($work->category)
        <div class="card">
            <div class="card-header">
                    <img src="{{ asset($work->image) }}" alt="{{ $work->name}}" style="width: 100%; height: 200px; object-fit: cover;">
                
            </div>
            <div class="card-body" style="display: flex; flex-direction: column; justify-content: center; align-items: flex-start; padding: 10px; min-height: px;">
                <span class="tag tag-teal" style="background: #cccccc; border-radius: 50px; font-size: 12px; margin: 0; color: #fff; padding: 2px 10px; text-transform: uppercase; cursor: pointer; background-color: #47bcd4;">{{ $work->category->description }}</span>
                    <h3  class="text-uppercase">
                        {{ $work->name }}
                    </h3>
                <h4><strong> Breakfast </strong></h4>
                <p style="font-size: 20px; margin: 0 0 40px;">
                    {{ $work->bfast}}
                </p>
                <h4><strong> Snack </strong></h4>
                <p style="font-size: 20px; margin: 0 0 40px;">
                    {{ $work->snack}}
                </p>
                <h4><strong> Lunch</strong></h4>
                <p style="font-size: 20px; margin: 0 0 40px;">
                    {{ $work->lunch}}
                </p>
                <h4><strong> Snack</strong></h4>
                <p style="font-size: 20px; margin: 0 0 40px;">
                    {{ $work->midsnack}}
                </p>
                <h4><strong> Dinner</strong></h4>
                <p style="font-size: 20px; margin: 0 0 40px;">
                    {{ $work->dinner}}
                </p>
                <h4><strong> Total Calories</strong></h4>
                <p style="font-size: 20px; margin: 0 0 40px;">
                    {{ $work->totalcalories}}
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

@endsection