@extends("frontend.layout")
@section("content")
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-image-3 ptb-150">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3>SHOP PAGE</h3>
                <ul>
                    <li><a href="{{url("/home")}}">Home</a></li>
                    <li class="active"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- Shop Page Area Start -->
    <div class="product-details pt-100 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-img">
                        <img class="zoompro" src="{{$product->getImage()}}"
                             data-zoom-image="assets/img/product-details/product-detalis-bl1.jpg" alt="zoom"/>
                        <div id="gallery" class="mt-20 product-dec-slider owl-carousel">
                            <a data-image="assets/img/product-details/product-detalis-l1.jpg"
                               data-zoom-image="assets/img/product-details/product-detalis-bl1.jpg">
                                <img src="assets/img/product-details/product-detalis-s1.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/product-detalis-l2.jpg"
                               data-zoom-image="assets/img/product-details/product-detalis-bl2.jpg">
                                <img src="assets/img/product-details/product-detalis-s2.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/product-detalis-l3.jpg"
                               data-zoom-image="assets/img/product-details/product-detalis-bl3.jpg">
                                <img src="assets/img/product-details/product-detalis-s3.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/product-detalis-l4.jpg"
                               data-zoom-image="assets/img/product-details/product-detalis-bl4.jpg">
                                <img src="assets/img/product-details/product-detalis-s4.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/product-detalis-l5.jpg"
                               data-zoom-image="assets/img/product-details/product-detalis-bl5.jpg">
                                <img src="assets/img/product-details/product-detalis-s5.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/product-detalis-l2.jpg"
                               data-zoom-image="assets/img/product-details/product-detalis-bl2.jpg">
                                <img src="assets/img/product-details/product-detalis-s2.jpg" alt="">
                            </a>
                        </div>
                        <span>-29%</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-content">
                        <h4>{{$product->__get("product_name")}}</h4>
                        <div class="rating-review">
                            <div class="pro-dec-rating">
                                <i class="ion-android-star-outline theme-star"></i>
                                <i class="ion-android-star-outline theme-star"></i>
                                <i class="ion-android-star-outline theme-star"></i>
                                <i class="ion-android-star-outline theme-star"></i>
                                <i class="ion-android-star-outline"></i>
                            </div>
                            <div class="pro-dec-review">
                                <ul>
                                    <li>32 Reviews</li>
                                    <li>Add Your Reviews</li>
                                </ul>
                            </div>
                        </div>
                        {{--                        <div class="product__details__price">Price: {{$product->getPrice()}}</div>--}}
                        <span>Price: {{$product->getPrice()}}</span>
                        <div class="in-stock">
                            <span>Available: <span>In stock</span></span>
                        </div>
                        <p>Descricribe{{$product->__get("product_desc")}}</p>
                        <div class="quality-add-to-cart">
                            <form method="POST" action="{{url("/cart/add/{$product->__get("id")}")}}">
                                @method("POST")
                                @csrf
                                <div class="product__details__quantity">
                                    <div class="quantity quality">
                                        <div class="pro-qty">
                                            <input class="cart-plus-minus-box" name="qty" type="number" value="1"
                                                   style="width: 60px"/>
                                        </div>
                                    </div>
                                </div>


                                <div class="shop-list-cart-wishlist">
                                    <button type="submit" class="success-btn"
                                            style="width: 160px; height:42px; background-color: #7fad39; color: #ffffff; font: 14px ">
                                        ADD TO CARD
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="pro-dec-social">
                            <ul>
                                <li><a class="tweet" href="#"><i class="ion-social-twitter"></i> Tweet</a></li>
                                <li><a class="share" href="#"><i class="ion-social-facebook"></i> Share</a></li>
                                <li><a class="google" href="#"><i class="ion-social-googleplus-outline"></i> Google+</a>
                                </li>
                                <li><a class="pinterest" href="#"><i class="ion-social-pinterest"></i> Pinterest</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page Area End -->
    <!-- Product Deatils Area End -->
    <div class="description-review-area pb-70">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav text-center">
                    <a class="active" data-toggle="tab" href="#des-det</a>ails1">Description</a>
                    <a data-toggle="tab" href="#des-details3">Review</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-wrapper">
                            <p>COZY is a traditional tea product of Vietnam which is processed and packaged according to
                                leading modern technology in Italy, Germany and Japan. </p>
                            <p>COZY is a traditional Vietnamese tea product processed and packaged according to leading modern technology in Italy,
                                Germany and Japan. Cozy has nearly 20 years of product development and perfection in the market.
                                Currently, among the cozy tea bags launched in the market, jasmine green tea is still the tea line that dominates
                                in sales and is favored by the domestic market.
                                The secret to differentiating this product lies in many factors.</p>
                            <ul>
                                <li>- Typi non habent claritatem insitam</li>
                                <li>- Est usus legentis in iis qui facit eorum claritatem.</li>
                                <li>- Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                                </li>
                                <li>- Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                    lectorum.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="rattings-wrapper">
                            <div class="sin-rattings">
                                <div class="star-author-all">
                                    <div class="ratting-star f-left">
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <span>(5)</span>
                                    </div>
                                    <div class="ratting-author f-right">
                                        <h3>Potanu Leos</h3>
                                        <span>12:24</span>
                                        <span>9 March 2018</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
                            </div>
                            <div class="sin-rattings">
                                <div class="star-author-all">
                                    <div class="ratting-star f-left">
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <span>(5)</span>
                                    </div>
                                    <div class="ratting-author f-right">
                                        <h3>Kahipo Khila</h3>
                                        <span>12:24</span>
                                        <span>9 March 2018</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
                            </div>
                        </div>
                        <div class="ratting-form-wrapper">
                            <h3>Add your Comments :</h3>
                            <div class="ratting-form">
                                <form action="#">
                                    <div class="star-box">
                                        <h2>Rating:</h2>
                                        <div class="ratting-star">
                                            <i class="ion-star theme-color"></i>
                                            <i class="ion-star theme-color"></i>
                                            <i class="ion-star theme-color"></i>
                                            <i class="ion-star theme-color"></i>
                                            <i class="ion-star"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="rating-form-style mb-20">
                                                <input placeholder="Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rating-form-style mb-20">
                                                <input placeholder="Email" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="rating-form-style form-submit">
                                                <textarea name="message" placeholder="Message"></textarea>
                                                <input type="submit" value="add review">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-100">
        <div class="container">
            <div class="product-top-bar section-border mb-35">
                <div class="section-title-wrap">
                    <h3 class="section-title section-bg-white">Related Products</h3>
                </div>
            </div>
            <div class="featured-product-active hot-flower owl-carousel product-nav">
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img alt="" src="assets/img/product/product-1.jpg">
                        </a>
                        <span>-30%</span>
                        <div class="product-action">
                            <a class="action-wishlist" href="#" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="#" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                               title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.html">Le Bongai Tea</a>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.html">+ Add to cart</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <span>$100.00 -</span>
                            <span class="product-price-old">$120.00 </span>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img alt="" src="assets/img/product/product-2.jpg">
                        </a>
                        <div class="product-action">
                            <a class="action-wishlist" href="#" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="#" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                               title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.html">Society Ice Tea</a>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.html">+ Add to cart</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <span>$100.00 -</span>
                            <span class="product-price-old">$120.00 </span>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img alt="" src="assets/img/product/product-3.jpg">
                        </a>
                        <span>-30%</span>
                        <div class="product-action">
                            <a class="action-wishlist" href="#" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="#" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                               title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.html">Green Tea Tulsi</a>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.html">+ Add to cart</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <span>$100.00 -</span>
                            <span class="product-price-old">$120.00 </span>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img alt="" src="assets/img/product/product-4.jpg">
                        </a>
                        <div class="product-action">
                            <a class="action-wishlist" href="#" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="#" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                               title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.html">Best Friends Tea</a>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.html">+ Add to cart</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <span>$100.00 -</span>
                            <span class="product-price-old">$120.00 </span>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img alt="" src="assets/img/product/product-5.jpg">
                        </a>
                        <span>-30%</span>
                        <div class="product-action">
                            <a class="action-wishlist" href="#" title="Wishlist">
                                <i class="ion-android-favorite-outline"></i>
                            </a>
                            <a class="action-cart" href="#" title="Add To Cart">
                                <i class="ion-ios-shuffle-strong"></i>
                            </a>
                            <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal"
                               title="Quick View">
                                <i class="ion-ios-search-strong"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content text-left">
                        <div class="product-hover-style">
                            <div class="product-title">
                                <h4>
                                    <a href="product-details.html">Instant Tea Premix</a>
                                </h4>
                            </div>
                            <div class="cart-hover">
                                <h4><a href="product-details.html">+ Add to cart</a></h4>
                            </div>
                        </div>
                        <div class="product-price-wrapper">
                            <span>$100.00 -</span>
                            <span class="product-price-old">$120.00 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer style Start -->
@endsection
