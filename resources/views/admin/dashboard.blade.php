@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Dashboard
                    
                </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-body bg-info text-white mb-3">
                            <a href="{{ url('exercises') }}" class="text-white">
                                <label>Total Exercise</label>
                                <h1>{{ $totalExercises }}</h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-body bg-warning text-white mb-3">
                            <a href="{{ url('redirect') }}" class="text-white">
                                <label>Total User</label>
                                <h1>{{ $totalUser }}</h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-body bg-success text-white mb-3">
                            <a href="{{ url('nutrition') }}" class="text-white">
                                <label>Total Nutrition</label>
                                <h1>{{ $totalNutrition }}</h1>        
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-body bg-primary text-white mb-2">
                            <a href="{{ url('category') }}" class="text-white">
                                <label>Total Stretching </label>
                                <h1>{{ $totalStretching }}</h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-body bg-secondary text-white mb-3">
                            <a href="{{ url('nutrition-category') }}" class="text-white">
                                <label>Total Calories Category</label>
                                <h1>{{ $totalCalCategories }}</h1>
                            </a>
                        </div>
                    </div> 
                    <div class="col-md-3">
                        <div class="card card-body bg-primary text-white mb-2">
                            <a href="{{ url('category') }}" class="text-white">
                                <label>Total Exercise Category</label>
                                <h1>{{ $totalCategories }}</h1>
                            </a>
                        </div>
                    </div>       
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>User
                    
                </h3>
            </div>
            <div class="card-body">
            <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Email</th>
                                <!-- <th>Image</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>User</td>
                                <td>{{ $user->email }}</td>
                                <!-- <td>
                                    <img src="{{ $user->profile_photo_url }}" alt="" class="rounded-full h-20 w-20 object-cover">
                                </td> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection