@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Settings
                
                </h3>
            </div>
            <div class="card-body">
            <form action="{{ url('setting/'.$setting->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>System Name</label>
                    <input type="text" name="name" class="form-control" value ="{{ $setting->name }}">
                </div>
                <div class="mb-3">
                    <label>System Short Name</label>
                    <input type="text" name="short_name" class="form-control" value ="{{ $setting->short_name }}">
                </div>
                <div class="mb-3">
                    <label>Welcome Message</label>
                    <textarea name="welcome" rows="9" class="form-control">{{ $setting->welcome }}</textarea>
                </div>
                <div class="mb-3">
                    <label>About Us</label>
                    <textarea name="about_us" rows="9" class="form-control">{{ $setting->about_us }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                <label>Logo</label>
                    <input type="file" multiple class="form-control" name="logo">
                    <img src="{{ asset("$setting->logo") }}" wdith="200px" height="200px" alt="Image" style="display: block;margin-left: auto; margin-right: auto;"/>
                </div>
                <div class="col-md-12 mb-3">
                <label>Cover</label>
                    <input type="file" multiple class="form-control" name="cover">
                    <img src="{{ asset("$setting->cover") }}" wdith="200px" height="200px" alt="Image" style="display: block;margin-left: auto; margin-right: auto;"/>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success float-end">save</button>
                    <!-- <a href="{{ url('setting/'.$setting->id.'/edit') }}" class="btn btn-primary btn-small float-end">Save</a>  -->
                </div>
            </form>
        </div>
    </div>
</div>


@endsection