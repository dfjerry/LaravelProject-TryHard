@extends("layout")
@section("title", "New Category Listing")
@section("contentHeader", "New Category")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Create A New Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("/admin/save-category")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="category_name" class="form-control @error("category_name")  is-invalid @enderror" placeholder="New Category">
                    @error("category_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Category Image</label>
                <input type="file" name="category_image" class="form-control" placeholder="New Category Image">
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
