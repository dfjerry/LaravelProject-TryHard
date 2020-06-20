@extends("layout")
@section("title", "New BlogRepository Listing")
@section("contentHeader", "New BlogRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Create A New Blog</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("admin/save-blog")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control @error("title")  is-invalid @enderror" placeholder="New Title">
                    @error("title")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Blog Image</label>
                    <input type="text" name="blog_image" class="form-control" placeholder="New Blog Image">
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
                    <input type="text" name="author" class="form-control @error("author")  is-invalid @enderror" placeholder="Author">
                    @error("author")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Date Post</label>
                    <input type="text" name="date_post" class="form-control @error("date_post")  is-invalid @enderror" placeholder="Date Post">
                    @error("date_post")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="blog_desc" class="form-control @error("blog_desc")  is-invalid @enderror" placeholder="Description">
                    @error("blog_desc")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Blog Content</label>
                    <input type="text" name="blog_content" class="form-control @error("blog_content")  is-invalid @enderror" placeholder="Blog Content">
                    @error("blog_content")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection
