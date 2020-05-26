@extends("layout")
@section("title","Edit Brand")
@section("contentHeader","Edit Brand")
{{--// thêm section là biến yield động và tham số thứ 2 là 1 string truyền vào--}}
@section("content")
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        {{--        update thì method sẽ là put method trong form thi phai la post @method thi la put--}}
        <form role="form" action="{{url("/update-brand/{$brand->__get("id")}")}}" method="post" enctype="multipart/form-data">
            @method("PUT")
            {{--            // method"POST" dùng để báo route--}}
            @csrf
            {{--            // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
            <div class="card-body">
                <div class="form-group">
                    <label>Brand Name</label>
                    <input type="text" value="{{$brand->__get("brand_name")}}" name="brand_name" class="form-control @error("brand_name") is-invalid @enderror" placeholder="New brand">
                    @error("brand_name")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                {{--                // biến error để lưu lỗi--}}
                <div class="form-group">
                    <label>Brand Image</label>
                    <p>Old Image</p><img src="{{$brand->getImage()}}" width="60px"/>
                    <input type="file" name="brand_image" class="form-control" placeholder="New Brand Name"/>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
