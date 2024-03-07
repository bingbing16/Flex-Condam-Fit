
@if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Developer
                <a href="{{ url('devs/create') }}" class="btn btn-primary btn-small float-end">Add Developer</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <!-- <th>Thougts</th> -->
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($developer as $developer)
                        <tr>
                            <td>{{ $developer->name }}</td>
                            <td>{{ $developer->position }}</td>
                            <!-- <td>{{ $developer->description }}</td> -->
                            <td>
                                <img src="{{ asset($developer->image) }}" style="border-radius: 8px; width: 72px; height: 72px;" alt="Developer Image">
                            </td>
                            <td>
                                <a href="{{ url('devs/'.$developer->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('devs/'.$developer->id.'/delete') }}"  onclick="return confirm('Delete this Developer?')" class="btn btn-danger btn-small">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>