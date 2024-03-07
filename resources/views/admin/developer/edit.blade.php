@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Developer
                    
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('devs/'.$developer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Developer Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $developer->name }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Position</label>
                            <input type="text" class="form-control" name="position" value="{{ $developer->position }}" required autocomplete="position" autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Thoughts (bisan nano kun nano iyo mayayakan sini na system)</label>
                            <textarea name="description" rows="4" class="form-control">{{ $developer->description }}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="file" class="form-control" name="image">
                            <img src="{{ asset($developer->image) }}" wdith="200px" height="200px" alt="Image" style="display: block;margin-left: auto; margin-right: auto;"/>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success float-end">Submit</button>
                            <a href="{{ url('devs') }}" class="btn btn-danger btn-small float-end">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection