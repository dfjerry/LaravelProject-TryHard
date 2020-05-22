@extends("layout")
@section("title", "Update Brand List")
@section("contentHeader", "Update Brand")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Update Brand</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("/update-brand/{$brand->__get("id")}")}}" method="post">
                    @method("PUT")
                    // method"POST" dùng để báo route
                    @csrf
                    // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419
                    <div class="card-body">
                        <div class="form-group">
                            <label>Brand Name</label>
                            <input type="text" value="{{$brand->__get("brand_name")}}" name="brand_name" class="form-control @error("brand_name") is-invalid @enderror" placeholder="New brand">
                            @error("brand_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        // biến error để lưu lỗi
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
