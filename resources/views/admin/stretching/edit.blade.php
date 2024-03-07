@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Stretching 
                </h3>
            </div>
            <div  class="card-body">
                <form action="{{ url('stretching/'.$stretchs->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-7 mb-3">
                            <label>Stretching Name</label>
                            <input type="text" name="name" value="{{ $stretchs->name }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Sets</label>
                            <input type="text" name="sets" value="{{ $stretchs->sets }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Reps</label>
                            <input type="text" name="reps" value="{{ $stretchs->reps }}" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Stretching Description</label>
                            <textarea name="description" rows="4" class="form-control">{{ $stretchs->description }}</textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                        <label>Image</label>
                            <input type="file" multiple class="form-control" name="image">
                            <img src="{{ asset($stretchs->image) }}" alt="Image" wdith="200px" height="200px" alt="Image" style="display: block;margin-left: auto; margin-right: auto;"/>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success float-end">Update</button>
                            <a href="{{ url('stretching') }}" class="btn btn-primary btn-small float-end">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection