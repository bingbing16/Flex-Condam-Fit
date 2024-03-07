@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Exercises
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('exercises/add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <label>Category</label>
                            <select class="col-lg-3 lg-7" name="category_id" class="form-control">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">Exercise Name</label>
                                <input type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Sets</label>
                                <textarea name="small_description" rows="1" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Reps</label>
                                <textarea name="description" rows="1" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="file" multiple class="form-control" name="image[]">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary float-end">Submit</button>
                            <a href="{{ url('exercises') }}" class="btn btn-danger float-end">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection 