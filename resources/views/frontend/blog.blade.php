@extends("frontend.layout")
@section("content")
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-image-3 ptb-150">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3>BLOG LEFT SIDEBAR</h3>
                <ul>
                    <li><a href="{{url("/home")}}">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- blog-area start -->
    <div class="blog-page-area ptb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-8 col-xl-9 col-md-8">
                    <div class="blog-wrapper">
                        @foreach($blog as $bl)
                        <div class="single-blog-wrapper mb-40">

                            <div class="blog-img mb-30">
                                <a href="{{$bl->getBlogUrl()}}">
                                    <img src="{{$bl->getImage()}}" width="1200px" height="" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h2><a href="{{$bl->getBlogUrl()}}">{{$bl->__get("title")}}</a></h2>
                                <div class="blog-date-categori">
                                    <ul>
                                        <li>{{$bl->__get("date_post")}}</li>
                                        <li><a href="#">{{$bl->__get("author")}} </a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>{{$bl->__get("blog_desc")}}  </p>
                            <div class="blog-btn-social mt-30">
                                <div class="blog-btn">
                                    <a href="{{$bl->getBlogUrl()}}" class="">read more</a>
                                </div>
                                <div class="blog-social">
                                    <span>share :</span>
                                    <ul>
                                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                        <li><a href="#"><i class="ion-social-skype"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="pagination-total-pages mt-50">
                            <div class="pagination-style">
                                <ul>
                                    <li><a class="prev-next prev" href="#"><i class="ion-ios-arrow-left"></i> Prev</a></li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a class="prev-next next" href="#">Next<i class="ion-ios-arrow-right"></i> </a></li>
                                </ul>
                            </div>
                            <div class="total-pages">
                                <p>Showing 1 - 20 of 30 results  </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-4">
                    <div class="blog-sidebar-wrapper sidebar-mrg">
                        <div class="blog-widget mb-50">
                            <div class="blog-search">
                                <form class="news-form">
                                    <input type="text" placeholder="Search.....">
                                    <button type="submit">
                                        <i class="ion-ios-search-strong"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="blog-widget mb-40">
                            <div class="blog-author">
                                <a href="#"><img src="assets/img/blog/blog-author.png" alt=""></a>
                                <h4><a href="#">Thanh Tuan</a></h4>
                                <span>Try_hard, SEO</span>
                            </div>
                        </div>
                        <div class="blog-widget mb-45">
                            <h4 class="blog-widget-title mb-25">Recent post</h4>
                            @foreach($blog as  $blog)
                            <div class="blog-recent-post">
                                <div class="recent-post-wrapper mb-25">
                                    <div class="recent-post-img">
                                        <a href="{{$bl->getBlogUrl()}}"><img src="{{$blog->getImage()}}" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="{{$bl->getBlogUrl()}}">{{$blog->__get("title")}}</a></h4>
                                        <span>{{$blog->__get("date_post")}}</span>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                        <div class="blog-widget mb-40">
                            <h4 class="blog-widget-title mb-25">categories</h4>
                            <div class="blog-categori">
                                @foreach(\App\Category::all() as $cat)
                                <ul>
                                    <li><a href="#">{{$cat->__get("category_name")}}</a></li>

                                </ul>
                                    @endforeach
                            </div>
                        </div>
                        <div class="blog-widget mb-35">
                            <h4 class="blog-widget-title mb-30">instagram</h4>
                            <div class="blog-instagram">
                                <ul>
                                    @foreach(\App\Product::all() as $pro)

                                    <li><a href="{{$pro->getProductUrl()}}"><img width="90px" height="90px" src="{{$pro->__get("product_image")}}" alt=""></a></li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="blog-widget mb-35">
                            <h4 class="blog-widget-title mb-20">follow us </h4>
                            <div class="blog-sidebar-social">
                                <ul>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-skype"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
