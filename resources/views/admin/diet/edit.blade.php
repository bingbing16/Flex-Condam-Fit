@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Diet Plan
                    
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('nutrition/'.$diets->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <label>Calories</label>
                            <select class="col-lg-3 lg-7" name="category_id" class="form-control">
                                @foreach ($calories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $diets->category_id ? 'selected':''}}>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Day</label>
                            <input type="text" class="form-control" name="name" value="{{ $diets->name }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Breakfast</label>
                            <textarea name="bfast" rows="7" class="form-control">{{ $diets->bfast }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Lunch</label>
                            <textarea name="lunch" rows="7" class="form-control">{{ $diets->lunch }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Snack</label>
                            <textarea name="snack" rows="7" class="form-control">{{ $diets->snack }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Dinner</label>
                            <textarea name="dinner" rows="7" class="form-control">{{ $diets->dinner }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">2nd Snack</label>
                            <textarea name="midsnack" rows="7" class="form-control">{{ $diets->midsnack }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Total Calories</label>
                            <input type="text" class="form-control" name="totalcalories" value="{{ $diets->totalcalories }}" required autocomplete="totalcalories" autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="file" class="form-control" name="image">
                            <img src="{{ asset($diets->image) }}" wdith="200px" height="200px" alt="Image" style="display: block;margin-left: auto; margin-right: auto;"/>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-small float-end">Update</button>
                            <a href="{{ url('nutrition') }}" class="btn btn-danger btn-small float-end">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection