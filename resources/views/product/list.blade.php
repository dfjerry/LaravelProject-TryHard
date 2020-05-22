@extends("layout")
@section("title", "Category List")
@section("contentHeader", "Category")
@section("content")
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h2 class="mb-0" >Category</h2>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" style="font-size: 18px; text-transform: capitalize!important;" class="sort" data-sort="name">ID</th>
                        <th scope="col" style="font-size: 18px; text-transform: capitalize!important;" class="sort" data-sort="name">Category Name</th>
                        <th scope="col" style="font-size: 18px; text-transform: capitalize!important;" class="sort" data-sort="name">Created At</th>
                        <th scope="col" style="font-size: 18px; text-transform: capitalize!important;" class="sort" data-sort="name">Update At</th>
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
