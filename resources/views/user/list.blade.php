@extends("layout")
@section("title","User Listing")
@section("contentHeader","User")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Brand Listing</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="card-header">--}}
{{--            <a href="{{url("admin/new-user")}}" class="float-right btn btn-outline-primary">+</a>--}}
{{--        </div>--}}
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>User Image</th>
                    <th>User Email</th>
                    <th>User Telephone</th>
                    <th>User Address</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Created_At</th>
                    <th>Updated_At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->__get("id")}}</td>
                        <td>{{$user->__get("name")}}</td>
                        <td><img src="{{$user->getImage()}}" width="60px"/></td>
                        <td>{{$user->__get("email")}}</td>
                        <td>{{$user->__get("telephone")}}</td>
                        <td>{{$user->__get("address")}}</td>
                        <td>{{$user->__get("password")}}</td>
                        <td>{{$user->__get("role")}}</td>
                        <td>{{$user->__get("created_at")}}</td>
                        <td>{{$user->__get("updated_at")}}</td>
                        <td>
                            <a href="{{url("admin/edit-user/{$user->__get("id")}")}}" class="btn btn-outline-warning">Edit</a>

                        </td>
                        <td> <form action="{{url("admin/delete-user/{$user->__get("id")}")}}" method="post">
                                @method("DELETE")
                                @csrf
                                <button type="submit" onclick="return confirm('Are you sure')"; class="btn btn-danger">Delete</button>
                            </form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $users->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
