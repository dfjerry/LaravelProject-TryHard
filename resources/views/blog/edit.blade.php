@extends("layout")
@section("title", "Update BlogRepository List")
@section("contentHeader", "Update BlogRepository")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Update blog</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("/admin/update-blog/{$blog->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Blog Name</label>
                            <input type="text" value="{{$blog->__get("title")}}" name="title" class="form-control @error("title") is-invalid @enderror" placeholder="New Blog">
                            @error("title")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Blog Image</label>
                            <input type="text" name="blog_image" class="form-control" placeholder="New Blog Name"/>
                        </div>
                        <div class="form-group">
                            <label>Blog Image1</label>
                            <input type="text" name="blog_image1" class="form-control" placeholder="New Blog Name"/>
                        </div>
                        <div class="form-group">
                            <label>Blog Image2</label>
                            <input type="text" name="blog_image2" class="form-control" placeholder="New Blog Name"/>
                        </div>
                        <div class="form-group">
                            <label>Blog Image3</label>
                            <input type="text" name="blog_image3" class="form-control" placeholder="New Blog Name"/>
                        </div>
                        <div class="form-group">
                            <label>Author</label>
                            <input type="text" value="{{$blog->__get("author")}}" name="author" class="form-control @error("author") is-invalid @enderror" placeholder="Author">
                            @error("author")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Date Post</label>
                            <input type="text" value="{{$blog->__get("date_post")}}" name="date_post" class="form-control @error("date_post") is-invalid @enderror" placeholder="Date Post">
                            @error("date_post")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" value="{{$blog->__get("blog_desc")}}" name="blog_desc" class="form-control @error("blog_desc") is-invalid @enderror" placeholder="Blog Desc">
                            @error("blog_desc")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Blog Content</label>
                            <input type="text" value="{{$blog->__get("blog_content")}}" name="blog_content" class="form-control @error("blog_content") is-invalid @enderror" placeholder="Blog Content">
                            @error("blog_content")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
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
