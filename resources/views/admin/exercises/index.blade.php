@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Exercises
                <a href="{{ url('exercises/create') }}" class="btn btn-primary btn-small float-end">Add Exercises</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Category</th>
                            <th>Name of Exercise</th>
                            <th>Day</th>
                            <th>Sets</th>
                            <th>Reps</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($exercises as $exercise)
                        <tr>
                            <!-- <td>{{ $exercise->id }}</td> -->
                            <td>
                            @if($exercise->category)
                                {{ $exercise->category->name }}
                            @else
                                No Available Category
                            @endif
                            </td>
                            <td>{{ $exercise->name }}</td>
                            <td>
                            @if($exercise->category)
                                {{ $exercise->category->description }}
                            @else
                                No Available Category
                            @endif
                            </td>
                            <td>{{ $exercise->small_description}}</td>
                            <td>{{ $exercise->description}}</td>
                            <td>
                                @if($exercise->exerciseImages)
                                    @foreach ($exercise->exerciseImages as $image)
                                        <img src="{{ asset($image->image) }}" style="width: 80px; height:80px;" class="me-4" alt="Image" />
                                    @endforeach
                                @else
                                <h4>No Image</h4>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('exercises/'.$exercise->id.'/edit') }}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ url('exercises/'.$exercise->id.'/delete') }}" onclick="return confirm('Delete this Exercise?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">No Exercises Available</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection 