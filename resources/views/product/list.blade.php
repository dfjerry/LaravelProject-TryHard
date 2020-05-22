@extends("layout")
@section("title", "Product List")
@section("contentHeader", "Product")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Product</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("/new-product")}}" class="btn btn-sm btn-neutral">Create</a>
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
                                data-sort="name">Product Name
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Product Description
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Price
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Quantity
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Category
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Brand
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
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->__get("id")}}</td>
                            <td>{{$product->__get("product_name")}}</td>
                            <td>{{$product->__get("product_desc")}}</td>
                            <td>{{$product->__get("price")}}</td>
                            <td>{{$product->__get("qty")}}</td>
                            <td>{{$product->__get("category_id")}}</td>
                            <td>{{$product->__get("brand_id")}}</td>
                            <td>{{$product->__get("created_at")}}</td>
                            <td>{{$product->__get("updated_at")}}</td>
                            <td>
                                <a href="{{url("/edit-product/{$product->__get("id")}")}}" class="btn btn-outline-dark">Edit</a>
                            </td>
                            <td>
                                <form action="{{url("/delete-product/{$product->__get("id")}")}}" method="post">
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
