<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyCategory">
                    <div class="modal-body">
                        <h6>Are you sure you want to delete this category?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">

        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
            <div class="card">
                <div class="card-header">
                    <h3>Category
                        <a href="{{ url('category/create') }}" class="btn btn-primary btn-small float-end">Add Category</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>Name</th>
                                <th>Day</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <!-- <td>{{ $category->id }}</td> -->
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <img src="{{ asset($category->image) }}" style="border-radius: 8px; width: 72px; height: 72px;" alt="Category Image">
                                </td>
                                <td>
                                    <a href="{{ url('category/'.$category->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                    <a href="#" wire:click="deleteCategory( {{ $category->id}} )" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')

    <script>
        window.addEventListener('close-modal', event => {

            $('#deleteModal').modal('hide');
        });
    </script>

@endpush