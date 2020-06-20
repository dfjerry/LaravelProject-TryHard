@extends("layout")
@section("title", "Update BlogRepository List")
@section("contentHeader", "Update BlogRepository")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Update blog</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("/admin/update-blog/{$blog->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--                    // method"POST" dùng để báo route--}}
                    @csrf
                    {{--                    // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Blog Name</label>
                            <input type="text" value="{{$blog->__get("title")}}" name="title" class="form-control @error("title") is-invalid @enderror" placeholder="New Blog">
                            @error("title")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Blog Image</label>
                            <p>Old Image</p><img src="{{$blog->getImage()}}" width="60px"/>
                            <input type="file" name="blog_image" class="form-control" placeholder="New Blog Name"/>
                        </div>
                        {{--                        // biến error để lưu lỗi--}}
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
