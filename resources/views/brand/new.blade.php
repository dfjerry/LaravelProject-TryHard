@extends("layout")
@section("title", "New Brand Listing")
@section("contentHeader", "New Brand")
@section("content")
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("/save-brand")}}" method="post"  enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Brand Name</label>
                    <input type="text" name="brand_name" class="form-control @error("brand_name")  is-invalid @enderror" placeholder="New Brand">
                    @error("brand_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Brand Image</label>
                    <input type="file" name="brand_image" class="form-control" placeholder="New Brand Image">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
