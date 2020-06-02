@extends("layout")
@section("title","User Listing")
@section("contentHeader","User")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User Account Listing</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <td>Account Status</td>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->__get("id")}}</td>
                        <td>{{$user->__get("name")}}</td>
                        <td>
                            @if($user->__get("role") == 1)
                                <a class="btn btn-danger btn-sm text-white">{{$user->__get("account_status")}}</a>
                            @elseif($user->__get("role") == 0)
                                <a class="btn btn-success btn-sm text-white">{{$user->__get("account_status")}}</a>
                            @elseif($user->defaultStatus())
                                <a class="btn btn-warning btn-sm text-white">{{$user->__get("account_status")}}</a>
                            @endif
                        </td>
                        <td class="d-flex">
                            @if(strcmp($user->__get("name"),"admin") == 0)
                                <a class="btn btn-danger btn-sm text-white" onclick="alert('This user is protected')">Protected User</a>
                            @else
                            <a class="pr-2" href="{{url("admin/view-user/{$user->__get("id")}")}}">
                                <button type="button" class="btn btn-info btn-sm">View Info</button>
                            </a>
                            <a class="pr-2" href="{{url("admin/edit-user/{$user->__get("id")}")}}">
                                <button type="button" class="btn btn-warning btn-sm">Set Access</button>
                            </a>
                                <form action="{{url("admin/delete-user/{$user->__get("id")}")}}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" data-toggle="modal" onclick="alert('Are you sure');" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $users->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
