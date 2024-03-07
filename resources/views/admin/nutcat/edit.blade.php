@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Calories Category
                
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('nutrition-category/'.$nutcast->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Calories</label>
                            <input type="text" class="form-control" name="name" value="{{ $nutcast->name }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="2" class="form-control">{{ $nutcast->description }}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="file" class="form-control" name="image">
                            <img src="{{ asset($nutcast->image) }}" wdith="200px" height="200px" alt="Image" style="display: block;margin-left: auto; margin-right: auto;"/>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success float-end">Submit</button>
                            <a href="{{ url('nutrition-category') }}" class="btn btn-primary btn-small float-end">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 