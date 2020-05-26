@extends("layout")
@section("title","Brand Listing")
@section("contentHeader","Brand")
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
        <div class="card-header">
            <a href="{{url("/new-brand")}}" class="float-right btn btn-outline-primary">+</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Brand Name</th>
                    <th>Brand Image</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($brands as $brand)
                    <tr>
                        <td>{{$brand->__get("id")}}</td>
                        <td>{{$brand->__get("brand_name")}}</td>
                        <td><img src="{{$brand->getImage()}}" width="60px"/></td>
                        <td>{{$brand->__get("created_at")}}</td>
                        <td>{{$brand->__get("updated_at")}}</td>
                        <td>
                            <a href="{{url("/edit-brand/{$brand->__get("id")}")}}" class="btn btn-outline-warning">Edit</a>

                        </td>
                        <td> <form action="{{url("/delete-brand/{$brand->__get("id")}")}}" method="post">
                                @method("DELETE")
                                @csrf
                                <button type="submit" onclick="return confirm('Are you sure')"; class="btn btn-danger">Delete</button>
                            </form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $brands->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
