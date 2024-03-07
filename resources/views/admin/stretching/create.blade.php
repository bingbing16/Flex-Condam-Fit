@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Create Stretching 
                </h3>
            </div>
            <div  class="card-body">
                <form action="{{ url('stretching/add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-7 mb-3">
                            <label>Stretching Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Sets</label>
                            <input type="text" name="sets" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Reps</label>
                            <input type="text" name="reps" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Stretching Description</label>
                            <textarea name="description" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                        <label>Image</label>
                            <input type="file" multiple class="form-control" name="image">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success float-end">Submit</button>
                            <a href="{{ url('stretching') }}" class="btn btn-primary btn-small float-end">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection