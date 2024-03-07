<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Diet Plans
                    <a href="{{ url('nutrition/create') }}" class="btn btn-primary btn-small float-end">Add Diet Plans</a>
                </h3>
            </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        
                        <th>Day</th>
                        <th>Total Calories</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($diet as $diets)
                    <tr>
                       
                        <td>{{ $diets->name }}</td>
                      
                        <td>{{ $diets->totalcalories }}</td>
                        <td>
                            <img src="{{ asset($diets->image) }}" style="border-radius: 8px; width: 72px; height: 72px;" alt="Category Image">
                        </td>
                        <td>
                            <a href="{{ url('nutrition/'.$diets->id.'/edit') }}" class="btn btn-primary btn-small">Edit</a>
                            <a href="{{ url('nutrition/'.$diets->id.'/delete') }}"  onclick="return confirm('Delete this Exercise?')" class="btn btn-danger btn-small">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>