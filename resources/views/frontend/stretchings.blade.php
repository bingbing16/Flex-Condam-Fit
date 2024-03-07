@extends('layouts.frontend')

@section('content')

<div class="container-fluid p-5">
    <div class="mb-3 text-center">
        <h5 class="text-primary text-uppercase">Flex Condam Fit</h5>
        <h3 class="display-3 text-uppercase mb-0">“The secret of getting ahead is getting started.”</h3>
    </div>

    <div class="container" style="display: flex; width: 1040px; justify-content: space-evenly; flex-wrap: wrap;">
        @forelse($stretchings as $work)
        <div class="card" style="margin: 10px; background-color: #fff; border-radius: 10px; box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2); overflow: hidden; width: 300px;">
            <div class="card-header">
                    <img src="{{ asset($work->image) }}" alt="{{ $work->name}}" style="width: 100%; height: 200px; object-fit: cover;">
            </div>
            <div class="card-body" style="display: flex; flex-direction: column; justify-content: center; align-items: flex-start; padding: 10px; min-height: 50px;">
                <!-- <span class="tag tag-teal" style="background: #cccccc; border-radius: 50px; font-size: 12px; margin: 0; color: #fff; padding: 2px 10px; text-transform: uppercase; cursor: pointer; background-color: #47bcd4;">{{ $work->description }}</span> -->
                    <h4  class="text-uppercase">
                        {{ $work->name }}
                    </h4>
                <p style="font-size: 20px; margin: 0 0 40px;">
                    Reps: {{ $work->reps}}&emsp;
                    Sets: {{ $work->sets}}
                </p>
            </div>
        </div>
        @empty
            No exercise Available
        @endforelse
    </div>
</div>

@endsection