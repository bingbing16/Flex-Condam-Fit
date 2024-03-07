@extends('layouts.admin')

@section('content')

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
                                <th>Image</th>
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
                                <td>
                                    <!-- <img src="{{ $user->profile_photo_url }}" alt="" class="rounded-full h-20 w-20 object-cover"> -->
                                @if (Auth::user()->profile_photo_path)
                                    <img class="h-8 w-8 rounded-full object-cover" src="/storage/{{ $user->profile_photo_path }}" alt="{{ $user->name }}" />
                                @else
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" /> 
                                @endif
                                </td>
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