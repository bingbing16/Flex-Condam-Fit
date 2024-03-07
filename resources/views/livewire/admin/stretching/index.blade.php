
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Stretching 
                <a href="{{ url('stretching/create') }}" class="btn btn-primary btn-small float-end">Add Stretching</a>
                </h3>
            </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>Stretching Name</th>
                                <th>Sets</th>
                                <th>Reps</th>
                                <!-- <th>Stretching Description</th> -->
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stretching as $stretchs)
                            <tr>
                                <!-- <td>{{ $stretchs->id }}</td> -->
                                <td>{{ $stretchs->name }}</td>
                                <td>{{ $stretchs->sets }}</td>
                                <td>{{ $stretchs->reps }}</td>
                                <!-- <td>{{ $stretchs->description }}</td> -->
                                <td>
                                    <img src="{{ asset($stretchs->image) }}" style="border-radius: 8px; width: 72px; height: 72px;" alt="stretching Image">
                                </td>
                                <td>
                                    <a href="{{ url('stretching/'.$stretchs->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ url('stretching/'.$stretchs->id.'/delete') }}"  onclick="return confirm('Delete this Stretching?')" class="btn btn-danger btn-small">Delete</a>
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