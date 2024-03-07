<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Settings
                <a href="{{ url('setting/create') }}" class="btn btn-primary btn-small float-end">Add Settings</a>
                </h3>
            </div>
            <div class="card-body">
            <form action="{{ url('setting/add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @foreach($settings as $set)
                <div class="mb-3">
                    <label>System Name</label>
                    <input type="text" name="name" class="form-control" value ="{{ $set->name }}">
                </div>
                <div class="mb-3">
                    <label>System Short Name</label>
                    <input type="text" name="short_name" class="form-control" value ="{{ $set->short_name }}">
                </div>
                <div class="mb-3">
                    <label>Welcome Message</label>
                    <textarea name="welcome" rows="9" class="form-control">{{ $set->welcome }}</textarea>
                </div>
                <div class="mb-3">
                    <label>About Us</label>
                    <textarea name="about_us" rows="9" class="form-control">{{ $set->about_us }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                <label>Logo</label>
                    <input type="file" multiple class="form-control" name="logo">
                    <img src="{{ asset("$set->logo") }}" wdith="200px" height="200px" alt="Image" style="display: block;margin-left: auto; margin-right: auto;"/>
                </div>
                <div class="col-md-12 mb-3">
                <label>Cover</label>
                    <input type="file" multiple class="form-control" name="cover">
                    <img src="{{ asset("$set->cover") }}" wdith="200px" height="200px" alt="Image" style="display: block;margin-left: auto; margin-right: auto;"/>
                </div>
                <div class="col-md-12">
                    <!-- <button type="submit" class="btn btn-success float-end">Submit</button> -->
                    <a href="{{ url('setting/'.$set->id.'/edit') }}" class="btn btn-primary btn-small float-end">Edit</a> 
                </div>
                @endforeach
            </form>
        </div>
    </div>
</div>