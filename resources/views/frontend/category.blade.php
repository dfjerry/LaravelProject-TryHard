@extends("frontend.layout")
@section("content")
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-image-3 ptb-150">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3>CATEGORY</h3>
                <ul>
                    <li><a href="{{url("/")}}">Home</a></li>
                    <li class="active">{{$category->__get("category_name")}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- Shop Page Area Start -->
    <div class="shop-page-area ptb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="shop-topbar-wrapper">
                        <div class="shop-topbar-left">
                            <ul class="view-mode">
                                <li class="active"><a href="#product-grid" data-view="product-grid"><i class="fa fa-th"></i></a></li>
                                <li><a href="#product-list" data-view="product-list"><i class="fa fa-list-ul"></i></a></li>
                            </ul>
                            <p>Showing 1 - 20 of 30 results  </p>
                        </div>
                        <div class="product-sorting-wrapper">
                            <div class="product-shorting shorting-style">
                                <label>View:</label>
                                <select>
                                    <option value=""> 20</option>
                                    <option value=""> 23</option>
                                    <option value=""> 30</option>
                                </select>
                            </div>
                            <div class="product-show shorting-style">
                                <label>Sort by:</label>
                                <select>
                                    <option value="">Default</option>
                                    <option value=""> Name</option>
                                    <option value=""> price</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grid-list-product-wrapper">
                            <div class="product-grid product-view pb-20">
                                <div class="row">
                                    @forelse($products as $p)
                                        <div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                            <div class="product-wrapper">
                                                <div class="product-img">
                                                    <a href="{{$p->getProductUrl()}}">
                                                        <img alt="" src="{{$p->__get("product_image")}}">
                                                    </a>
                                                    <span>-30%</span>
                                                    <div class="product-action">
                                                        <a class="action-wishlist" href="#" title="Wishlist">
                                                            <i class="ion-android-favorite-outline"></i>
                                                        </a>
                                                        <a class="action-cart" href="#" title="Add To Cart">
                                                            <i class="ion-ios-shuffle-strong"></i>
                                                        </a>
                                                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-left">
                                                    <div class="product-hover-style">
                                                        <div class="product-title">
                                                            <h4>
                                                                <a href="product-details.html">Nature Close Tea</a>
                                                            </h4>
                                                        </div>
                                                        <div class="cart-hover">
                                                            <h4><a href="product-details.html">+ Add to cart</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="product-price-wrapper">
                                                        <span>{{$p->getPrice()}}</span>
                                                        <span class="product-price-old">{{$p->getPrice()}}</span>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h4>
                                                        <a href="product-details.html">Nature Close Tea</a>
                                                    </h4>
                                                    <div class="product-price-wrapper">
                                                        <span>$100.00</span>
                                                        <span class="product-price-old">$120.00 </span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    <div class="shop-list-cart-wishlist">
                                                        <a href="#" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" title="Add To Cart"><i class="ion-ios-shuffle-strong"></i></a>
                                                        <a href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                            <i class="ion-ios-search-strong"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <p>Product not found</p>
                                    @endforelse

                                </div>
                            </div>


                        {!! $products->links() !!}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-sidebar-wrapper gray-bg-7 shop-sidebar-mrg">
                        <div class="shop-widget">
                            <h4 class="shop-sidebar-title">Shop By Categories</h4>

                            <div class="shop-catigory">
                                <ul id="faq">
                                    @foreach(\App\Category::all() as $c)
                                        <li> <a  href="{{$c->getCategoryUrl()}}">{{$c->__get("category_name")}} </a>
                                        </li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page Area End -->
@endsection
