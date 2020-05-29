@extends("layout")
@section("title","Edit Distributor")
@section("contentHeader","Edit Distributor")
{{--// thêm section là biến yield động và tham số thứ 2 là 1 string truyền vào--}}
@section("content")
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        {{--        update thì method sẽ là put method trong form thi phai la post @method thi la put--}}
        <form role="form" action="{{url("/update-distributor/{$distributor->__get("id")}")}}" method="post" enctype="multipart/form-data">
            @method("PUT")
            {{--            // method"POST" dùng để báo route--}}
            @csrf
            {{--            // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
            <div class="card-body">
                <div class="form-group">
                    <label>Distributor Name</label>
                    <input type="text" value="{{$distributor->__get("distributor_name")}}" name="distributor_name" class="form-control @error("distributor_name") is-invalid @enderror" placeholder="New Distributor">
                    @error("distributor_name")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" value="{{$distributor->__get("address")}}" name="address" class="form-control @error("address") is-invalid @enderror" placeholder="Address">
                    @error("address")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Telephone</label>
                    <input type="text" value="{{$distributor->__get("telephone")}}" name="telephone" class="form-control @error("telephone") is-invalid @enderror" placeholder="Telephone">
                    @error("telephone")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                {{--                // biến error để lưu lỗi--}}
                <div class="form-group">
                    <label>Distributor Image</label>
                    <p>Old Image</p><img src="{{$distributor->getImage()}}" width="60px"/>
                    <input type="file" name="logo" class="form-control" placeholder="Logo"/>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
