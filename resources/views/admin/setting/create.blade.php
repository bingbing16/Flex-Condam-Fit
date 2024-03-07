@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>
                    Add Settings 
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('setting/add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>System Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>System Short Name</label>
                        <input type="text" name="short_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Welcome Message</label>
                        <textarea name="welcome" rows="9" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>About Us</label>
                        <textarea name="about_us" rows="9" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                    <label>Logo</label>
                        <input type="file" multiple class="form-control" name="logo">
                    </div>
                    <div class="col-md-12 mb-3">
                    <label>Cover</label>
                        <input type="file" multiple class="form-control" name="cover">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success float-end">Submit</button>
                        <a href="{{ url('setting') }}" class="btn btn-danger btn-small float-end">Cancel</a> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection