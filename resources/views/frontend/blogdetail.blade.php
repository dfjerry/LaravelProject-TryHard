@extends("frontend.layout")
@section("content")
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-image-3 ptb-150">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3>BLOG DETAILS STANDARD</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Blog Details Standard</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- blog-area start -->
    <div class="blog-page-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-9 col-md-8">
                    <div class="blog-details-wrapper">
                        <div class="single-blog-wrapper">
                            <div class="blog-img mb-30">
                                <img src="{{$blog->getImage()}}" width="1200px" height="700px" alt="">
                            </div>
                            <div class="blog-content">
                                <h2>{{$blog->__get("title")}}</h2>
                                <div class="blog-date-categori">
                                    <ul>
                                        <li>{{$blog->__get("date_post")}} </li>
                                        <li>{{$blog->__get("author")}}</li>
                                    </ul>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprhendit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qei officia deser mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</p>
                            <div class="highlights-title-wrapper">
                                <div class="highlights-img">
                                    <img src="assets/img/blog/blog-link-post2.png" alt="">
                                </div>
                                <div class="importent-title">
                                    <h4>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud.</h4>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="dec-img-wrapper">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="dec-img">
                                            <img src="assets/img/blog/blog-dec-img1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="dec-img dec-mrg">
                                            <img src="assets/img/blog/blog-dec-img2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehnderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dser mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</p>
                            <div class="blog-dec-tags-social">
                                <div class="blog-dec-tags">
                                    <ul>
                                        <li><a href="#">lifestyle</a></li>
                                        <li><a href="#">interior</a></li>
                                        <li><a href="#">outdoor</a></li>
                                    </ul>
                                </div>
                                <div class="blog-dec-social">
                                    <span>share :</span>
                                    <ul>
                                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                        <li><a href="#"><i class="ion-social-skype"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="administrator-wrapper">
                                <div class="administrator-img">
                                    <img src="assets/img/blog/blog-administrator.png" alt="">
                                </div>
                                <div class="administrator-content">
                                    <h4>Mildred Barnett</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea coma consequat. Duis aute irure dolor in reprehenderit</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-comment-wrapper mt-55">
                            <h4 class="blog-dec-title">COMMENTS : 02</h4>
                            <div class="single-comment-wrapper mt-35">
                                <div class="blog-comment-img">
                                    <img src="assets/img/blog/blog-comment1.png" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h4>Anthony Stephens</h4>
                                    <span>October 14, 2018 </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                    <div class="blog-btn">
                                        <a href="blog-details.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-comment-wrapper mt-50 ml-125">
                                <div class="blog-comment-img">
                                    <img src="assets/img/blog/blog-comment2.png" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h4>Anthony Stephens</h4>
                                    <span>October 14, 2018 </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                    <div class="blog-btn">
                                        <a href="blog-details.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-reply-wrapper mt-50">
                            <h4 class="blog-dec-title">POST A COMMENT</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="leave-form">
                                            <input type="text" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="leave-form">
                                            <input type="email" placeholder="Eail Address ">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-leave">
                                            <textarea placeholder="Massage"></textarea>
                                            <input type="submit" value="SEND MASSAGE">
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                                <h4><a href="#">Kathy Gibson</a></h4>
                                <span>Head of Director, SEO</span>
                            </div>
                        </div>
                        <div class="blog-widget mb-45">
                            <h4 class="blog-widget-title mb-25">Recent post</h4>
                            <div class="blog-recent-post">
                                <div class="recent-post-wrapper mb-25">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/blog-recentpost-1.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">New Products</a></h4>
                                        <span>October 14, 2018</span>
                                    </div>
                                </div>
                                <div class="recent-post-wrapper mb-25">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/blog-recentpost-2.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">New Products</a></h4>
                                        <span>October 14, 2018</span>
                                    </div>
                                </div>
                                <div class="recent-post-wrapper mb-25">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/blog-recentpost-3.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">New Products</a></h4>
                                        <span>October 14, 2018</span>
                                    </div>
                                </div>
                                <div class="recent-post-wrapper mb-25">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/blog-recentpost-4.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">New Products</a></h4>
                                        <span>October 14, 2018</span>
                                    </div>
                                </div>
                            </div>
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
    <!-- blog-area end -->
    @endsection
