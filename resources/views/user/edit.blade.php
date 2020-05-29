@extends("layout")
@section("title","Edit User")
@section("contentHeader","Edit User")
{{--// thêm section là biến yield động và tham số thứ 2 là 1 string truyền vào--}}
@section("content")
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        {{--        update thì method sẽ là put method trong form thi phai la post @method thi la put--}}
        <form role="form" action="{{url("admin/update-user/{$user->__get("id")}")}}" method="post" enctype="multipart/form-data">
            @method("PUT")
            {{--            // method"POST" dùng để báo route--}}
            @csrf
            {{--            // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
            <div class="card-body">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" value="{{$user->__get("name")}}" name="name" class="form-control @error("name") is-invalid @enderror">
                    @error("name")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                {{--                // biến error để lưu lỗi--}}
                <div class="form-group">
                    <label>User Image</label>
                    <p>Old Image</p><img src="{{$user->getImage()}}" width="60px"/>
                    <input type="file" name="image" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>User Email</label>
                    <input type="text" value="{{$user->__get("email")}}" name="email" class="form-control @error("email") is-invalid @enderror">
                    @error("email")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>User Telephone</label>
                    <input type="text" value="{{$user->__get("telephone")}}" name="telephone" class="form-control @error("telephone") is-invalid @enderror">
                    @error("telephone")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>User Address</label>
                    <input type="text" value="{{$user->__get("address")}}" name="address" class="form-control @error("address") is-invalid @enderror">
                    @error("address")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>User Password</label>
                    <input type="password" value="{{$user->__get("password")}}" name="password" class="form-control @error("password") is-invalid @enderror">
                    @error("password")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>User Role</label>
                    <input type="text" value="{{$user->__get("role")}}" name="role" class="form-control @error("role") is-invalid @enderror">
                    @error("role")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
