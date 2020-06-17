@extends("frontend.layout")
@section("content")
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-image-3 ptb-150">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3>SHOP PAGE</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
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
                        <img class="zoompro" src="{{$product   ->getImage()}}" data-zoom-image="assets/img/product-details/product-detalis-bl1.jpg" alt="zoom"/>
                        <div id="gallery" class="mt-20 product-dec-slider owl-carousel">
                            <a data-image="assets/img/product-details/product-detalis-l1.jpg" data-zoom-image="assets/img/product-details/product-detalis-bl1.jpg">
                                <img src="assets/img/product-details/product-detalis-s1.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/product-detalis-l2.jpg" data-zoom-image="assets/img/product-details/product-detalis-bl2.jpg">
                                <img src="assets/img/product-details/product-detalis-s2.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/product-detalis-l3.jpg" data-zoom-image="assets/img/product-details/product-detalis-bl3.jpg">
                                <img src="assets/img/product-details/product-detalis-s3.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/product-detalis-l4.jpg" data-zoom-image="assets/img/product-details/product-detalis-bl4.jpg">
                                <img src="assets/img/product-details/product-detalis-s4.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/product-detalis-l5.jpg" data-zoom-image="assets/img/product-details/product-detalis-bl5.jpg">
                                <img src="assets/img/product-details/product-detalis-s5.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product-details/product-detalis-l2.jpg" data-zoom-image="assets/img/product-details/product-detalis-bl2.jpg">
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
                                    <li>32 Reviews </li>
                                    <li> Add Your Reviews</li>
                                </ul>
                            </div>
                        </div>
                        <span>{{$product->getPrice()}}</span>
                        <div class="in-stock">
                            <p>Available: <span>In stock</span></p>
                        </div>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p>
                        <div class="pro-dec-feature">
                            <ul>
                                <li><input type="checkbox"> Protection Plan: <span> 2 year  $4.99</span></li>
                                <li><input type="checkbox"> Remote Holder: <span> $9.99</span></li>
                                <li><input type="checkbox"> Koral Alexa Voice Remote Case: <span> Red  $16.99</span></li>
                                <li><input type="checkbox"> Amazon Basics HD Antenna: <span>25 Mile  $14.99</span></li>
                            </ul>
                        </div>
                        <div class="quality-add-to-cart">
                            <div class="quality">
                                <label>Qty:</label>
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                            </div>
                            <div class="shop-list-cart-wishlist">
                                <a title="Add To Cart" href="#">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a title="Wishlist" href="#">
                                    <i class="icon-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="pro-dec-categories">
                            <ul>
                                <li class="categories-title">Categories:</li>
                                <li><a href="#">Green,</a></li>
                                <li><a href="#">Herbal, </a></li>
                                <li><a href="#">Loose,</a></li>
                                <li><a href="#">Mate,</a></li>
                                <li><a href="#">Organic </a></li>
                            </ul>
                        </div>
                        <div class="pro-dec-categories">
                            <ul>
                                <li class="categories-title">Tags: </li>
                                <li><a href="#"> Oolong, </a></li>
                                <li><a href="#"> Pu'erh,</a></li>
                                <li><a href="#"> Dark,</a></li>
                                <li><a href="#"> Special </a></li>
                            </ul>
                        </div>
                        <div class="pro-dec-social">
                            <ul>
                                <li><a class="tweet" href="#"><i class="ion-social-twitter"></i> Tweet</a></li>
                                <li><a class="share" href="#"><i class="ion-social-facebook"></i> Share</a></li>
                                <li><a class="google" href="#"><i class="ion-social-googleplus-outline"></i> Google+</a></li>
                                <li><a class="pinterest" href="#"><i class="ion-social-pinterest"></i> Pinterest</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page Area End -->
@endsection
