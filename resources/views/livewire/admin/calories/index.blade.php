<div>
    <div wire:ignore.self class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Category title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="desCategory">
                    <div class="modal-body">
                        <h6>Are you sure you want to delete this data?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Calories Category
                    <a href="{{ url('nutrition-category/create') }}" class="btn btn-primary btn-small float-end">Add category</a>
                    </h3>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Calories</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nutcat as $nutcast)
                        <tr>
                            <!-- <td>{{ $nutcast->id }}</td> -->
                            <td>{{ $nutcast->name }}</td>
                            <td>{{ $nutcast->description }}</td>
                            <td>
                                <img src="{{ asset($nutcast->image) }}" style="border-radius: 8px; width: 72px; height: 72px;" alt="Category Image">
                            </td>
                            <td>
                                <a href="{{ url('nutrition-category/'.$nutcast->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('nutrition-category/'.$nutcast->id.'/delete') }}" onclick="return confirm('Delete this Exercise?')" class="btn btn-danger">Delete</a>
                            </td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $nutcat->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')

    <script>
        window.addEventListener('close-modal', event => {

            $('#delModal').modal('hide');
        });
    </script>

@endpush