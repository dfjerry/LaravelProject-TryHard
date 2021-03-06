@extends("layout")
@section("title", "Create Product List")
@section("contentHeader", "New Product")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Create New Product</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("admin/save-product")}}" method="post" enctype="multipart/form-data">
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
                            <label>Product Image</label>
                            <input type="text" name="product_image" class="form-control @error("product_image") is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Product Image1</label>
                            <input type="text" name="product_image1" class="form-control @error("product_image1") is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Product Image2</label>
                            <input type="text" name="product_image2" class="form-control @error("product_image2") is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Product Image3</label>
                            <input type="text" name="product_image3" class="form-control @error("product_image3") is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Product Image4</label>
                            <input type="text" name="product_image4" class="form-control @error("product_image4") is-invalid @enderror">
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
