@extends("layout")
@section("title","Distributor Listing")
@section("contentHeader","Distributor")
@section("content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Distributor Listing</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header">
            <a href="{{url("/new-distributor")}}" class="float-right btn btn-outline-primary">+</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Distributor Name</th>
                    <th>Address</th>
                    <th>Telephone</th>
                    <th>Logo</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($distributors as $distributor)
                    <tr>
                        <td>{{$distributor->__get("id")}}</td>
                        <td>{{$distributor->__get("distributor_name")}}</td>
                        <td>{{$distributor->__get("address")}}</td>
                        <td>{{$distributor->__get("telephone")}}</td>
                        <td><img src="{{$distributor->getImage()}}" width="60px"/></td>
                        <td>{{$distributor->__get("created_at")}}</td>
                        <td>{{$distributor->__get("updated_at")}}</td>
                        <td>
                            <a href="{{url("/edit-distributor/{$distributor->__get("id")}")}}" class="btn btn-outline-warning">Edit</a>

                        </td>
                        <td> <form action="{{url("/delete-distributor/{$distributor->__get("id")}")}}" method="post">
                                @method("DELETE")
                                @csrf
                                <button type="submit" onclick="return confirm('Are you sure')"; class="btn btn-danger">Delete</button>
                            </form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $distributors->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
