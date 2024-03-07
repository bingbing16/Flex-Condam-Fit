@extends('layouts.frontend')

@section('content')

<div class="container-fluid p-5">
    <div class="mb-5 text-center">
        <!-- <h5 class="text-primary text-uppercase">Nutrition</h5> -->
        <h1 class="display-3 text-uppercase mb-0">Nutrition Routine</h1>
    </div>
    <div class="tab-class text-center">
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-5">
                    @foreach($categories as $category)
                        <div class="col-md-3 col-md-4 col-sm-6">
                            <a href="{{ url('food/'.$category->name) }}">
                                <div class="rowlo bg-dark rounded text-center py-5 px-3">
                                    <h6 class="text-uppercase text-light mb-3">calories</h6>
                                    <h1 class="text-uppercase text-primary">{{ $category->name }}</h1>
                                    <p class="text-uppercase text-secondary mb-0" style="font-size: 11px;">Flex Condam fit</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection