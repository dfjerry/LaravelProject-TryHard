@extends("layout")
@section("title", "BlogRepository List")
@section("contentHeader", "BlogRepository List")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Blog List</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("/admin/new-blog")}}" class="btn btn-sm btn-neutral">Create</a>
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
                                data-sort="name">Blog Name
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Blog Image
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Blog Image1
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Blog Image2
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Blog Image3
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Blog Content
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
                        @foreach($blog as $blog)
                            <tr>
                                <td>{{$blog->__get("id")}}</td>
                                <td>{{$blog->__get("title")}}</td>
                                <td><img src="{{$blog->__get("blog_image")}}" width="60px"/></td>
                                <td><img src="{{$blog->__get("blog_image1")}}" width="60px"/></td>
                                <td><img src="{{$blog->__get("blog_image2")}}" width="60px"/></td>
                                <td><img src="{{$blog->__get("blog_image3")}}" width="60px"/></td>
                                <td>{{$blog->__get("blog_content")}}</td>
                                <td>{{$blog->__get("created_at")}}</td>
                                <td>{{$blog->__get("updated_at")}}</td>
                                <td>
                                    <a href="{{url("/admin/edit-blog/{$blog->__get("id")}")}}" class="btn btn-outline-warning">Edit</a>
                                </td>
                                <td>
                                    <form action="{{url("/admin/delete-blog/{$blog->__get("id")}")}}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" onclick="return confirm('Are you sure ?');" class="btn btn-outline-dark">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
