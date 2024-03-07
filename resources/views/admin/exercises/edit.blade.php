@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Exercises
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('exercises/'.$exercise->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')  

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <label>Category</label>
                            <select class="col-lg-12 mb-3" name="category_id" class="form-control">
                                <option value="" disabled>Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $exercise->category_id ? 'selected':''}} >
                                {{ $category->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">Exercise Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $exercise->name}}" required autocomplete="name" autofocus>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Sets</label>
                                <textarea name="small_description" rows="1" class="form-control">{{ $exercise->small_description}}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Reps</label>
                                <textarea name="description" rows="1" class="form-control">{{ $exercise->description}}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="file" multiple class="form-control" name="image[]">
                            </div>
                            <div>
                             @if($exercise->exerciseImages)
                                @foreach ($exercise->exerciseImages as $image)
                                <div class="col-md-2">
                                    <img src="{{ asset($image->image) }}" style="width: 80px; height:80px;" class="me-4 border" alt="Image" />
                                    <a href="{{ url('exercise-image/'.$image->id.'/delete') }}" class="d-block">Remove</a>
                                </div>
                                @endforeach
                            @else
                            <h4>No Image</h4>
                            @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary float-end">Update</button>
                            <a href="{{ url('exercises') }}" class="btn btn-danger float-end">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection 