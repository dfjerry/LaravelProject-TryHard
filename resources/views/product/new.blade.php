@extends("layout")
@section("title", "Create Product List")
@section("contentHeader", "Product")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Create Product</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("save-product")}}" method="post">
                    @method("POST")
                    {{--            // method"POST" dùng để báo route--}}
                    @csrf
                    {{--            // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="product_name" class="form-control @error("product_name") is-invalid @enderror" placeholder="New Product Name">
                            @error("product_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Product Desc</label>
                            <textarea name="product_desc" class="form-control @error("product_desc") is-invalid @enderror" placeholder="New Product Desc"></textarea>
                            @error("product_desc")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control @error("price") is-invalid @enderror" placeholder="New Product Price">
                            @error("price")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Qty</label>
                            <input type="text" name="qty" class="form-control @error("qty") is-invalid @enderror" placeholder="New Product Qty">
                            @error("qty")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->__get("id")}}">{{$category->__get("category_name")}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Brand</label>
                            <select name="brand_id" class="form-control">
                                @foreach($brands as $brand)
                                    <option value="{{$brand->__get("id")}}">{{$brand->__get("brand_name")}}</option>
                                @endforeach
                            </select>
                        </div>


                        {{--                // biến error để lưu lỗi--}}
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
