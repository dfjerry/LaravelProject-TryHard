@extends("layout")
@section("title", "Category List")
@section("contentHeader", "Category")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Category</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="#" class="btn btn-sm btn-neutral">Create</a>
                        <a href="#" class="btn btn-sm btn-neutral">Edit</a>
                        <a href="#" class="btn btn-sm btn-neutral">Update</a>
                        <a href="#" class="btn btn-sm btn-neutral">Delete</a>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" style="font-size: 18px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">ID
                            </th>
                            <th scope="col" style="font-size: 18px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Category Name
                            </th>
                            <th scope="col" style="font-size: 18px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Created At
                            </th>
                            <th scope="col" style="font-size: 18px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Update At
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
