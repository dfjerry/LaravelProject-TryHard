@extends("layout")
@section("title", "Brand List")
@section("contentHeader", "Band List")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Brand List</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("/new-brand")}}" class="btn btn-sm btn-neutral">Create</a>
                        @foreach($brands as $brand)
                            <a href="{{url("/edit-brand/{$brand->__get("id")}")}}" class="btn btn-sm btn-neutral">Update</a>
                        @endforeach

                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">ID
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Brand Name
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Created At
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Updated At
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Edit
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Delete
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{$brand->__get("id")}}</td>
                                <td>{{$brand->__get("brand_name")}}</td>
                                <td>{{$brand->__get("created_at")}}</td>
                                <td>{{$brand->__get("updated_at")}}</td>
                                <td>
                                    <a href="{{url("/edit-brand/{$brand->__get("id")}")}}" class="btn btn-outline-warning">Edit</a>

                                </td>
                                <td>
                                    <form action="{{url("/delete-brand/{$brand->__get("id")}")}}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-outline-dark">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
