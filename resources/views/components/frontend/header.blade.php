<!-- header start -->
<header class="header-area gray-bg clearfix">
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-2">
                    <div class="logo">
                        <a href="/home">
                            <img alt="" src="{{url("assets/img/logo/logo.png")}}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-8">
                    <div class="header-bottom-right ">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="top-hover "><a href="{{url("/home")}}">home</a>
                                    </li>

                                    <li class="mega-menu-position top-hover"><a href="{{url("/shop")}}">shop</a>
                                        <ul class="mega-menu">
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"></li>
                                                    <li><a href="shop.html"></a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url("/about")}}">about</a></li>
                                    <li><a href="{{url("/blog")}}">blog</a></li>
                                    <li><a href="{{url("/contact")}}">contact</a></li>
                                    <li>
                                        <div class="header-bottom ">
                                            <div class="header">
                                                <form action="{{url("/search")}}" method="post">
                                                    @method("POST")
                                                    @csrf
                                                    <div class="md-form active-pink-2 mb-3" style="position: relative;">
                                                        <input class="search" id="search" name="search" type="text" placeholder="Search"/>
                                                        <button class="button__search" style=" background-color: transparent;position: absolute;left: 160px" type="submit"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-cart col-lg-1">
                            <a href="#">
                                <div class="cart-icon">
                                    <i class="ti-shopping-cart"></i>
                                    @php
                                        $myCart = session()->has("my_cart")?session("my_cart"):[];
                                        $count_item  = count($myCart);
                                        $productIds = [];
                                        foreach ($myCart as $item){
                                            $productIds[] = $item["product_id"];
                                        }
                                        $grandTotal = 0;
                                        $products = \App\Product::find($productIds);
                                        foreach ($products as $p){
                                            foreach ($myCart as $item){
                                                if($p->__get("id") == $item["product_id"])
                                                    $grandTotal += ($p->__get("price")*$item["qty"]);
                                            }
                                        }
                                    @endphp
                                </div>
                            </a>
                            <div class="shopping-cart-content">
                                @foreach($products as $p)
                                    <ul>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img style="width: 70px; height: 70px " src="{{$p->getImage()}} "></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <p><a href="#">{{$p->__get("product_name")}}</a></p>

                                                <p>Qty:<span>{{$p->__get("qty")}}</span> </p>
                                                {{--                                            <span class="cart-plus-minus-box" type="text" value="" name="qtybutton"></span>--}}

                                                <span >Price: {{$p->getPrice()}}</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="ion ion-close"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                @endforeach
                                <div class="shopping-cart-total">
                                    <h4>Total : <span class="shop-total">{{$grandTotal}} </span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a href="{{url("/shopping-cart")}}">view cart</a>
                                    <a href="{{url("/checkout")}}">checkout</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="logout-button col-lg-1 col-md-2 col-2">
                    <div class="logout" style="position: relative">
                        @guest
                            <li class="float-right" style="list-style: none;"><a  href="{{url("/login")}}" style="border-radius: 20px; width: 100px; height: 40px" type="button" class="btn btn-secondary">Login</a></li>
                        @else
                        <a class="dropdown-item"  style="margin-left: 20px!important;position: absolute;top: -5px" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <li class="float-right" style="list-style: none;"><button style="border-radius: 5px; width: 100px; height: 40px" type="button" class="btn btn-secondary">Logout</button></li>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endguest
                    </div>
                </div>
            </div>
            <div class="table__search">
                <table class="table table-borderless table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="#">HOME</a>
                                <ul>
                                    <li><a href="index.html">home version 1</a></li>
                                    <li><a href="index-2.html">home version 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages</a>
                                <ul>
                                    <li><a href="about-us.html">about us </a></li>
                                    <li><a href="shop.html">shop Grid</a></li>
                                    <li><a href="shop-list.html">shop list</a></li>
                                    <li><a href="product-details.html">product details</a></li>
                                    <li><a href="cart-page.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="my-account.html">my account</a></li>
                                    <li><a href="login-register.html">login / register</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html"> Shop </a>
                                <ul>
                                    <li><a href="#">Categories 01</a>
                                        <ul>
                                            <li><a href="shop.html">Aconite</a></li>
                                            <li><a href="shop.html">Ageratum</a></li>
                                            <li><a href="shop.html">Allium</a></li>
                                            <li><a href="shop.html">Anemone</a></li>
                                            <li><a href="shop.html">Angelica</a></li>
                                            <li><a href="shop.html">Angelonia</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 02</a>
                                        <ul>
                                            <li><a href="shop.html">Balsam</a></li>
                                            <li><a href="shop.html">Baneberry</a></li>
                                            <li><a href="shop.html">Bee Balm</a></li>
                                            <li><a href="shop.html">Begonia</a></li>
                                            <li><a href="shop.html">Bellflower</a></li>
                                            <li><a href="shop.html">Bergenia</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 03</a>
                                        <ul>
                                            <li><a href="shop.html">Caladium</a></li>
                                            <li><a href="shop.html">Calendula</a></li>
                                            <li><a href="shop.html">Carnation</a></li>
                                            <li><a href="shop.html">Catmint</a></li>
                                            <li><a href="shop.html">Celosia</a></li>
                                            <li><a href="shop.html">Chives</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 04</a>
                                        <ul>
                                            <li><a href="shop.html">Daffodil</a></li>
                                            <li><a href="shop.html">Dahlia</a></li>
                                            <li><a href="shop.html">Daisy</a></li>
                                            <li><a href="shop.html">Diascia</a></li>
                                            <li><a href="shop.html">Dusty Miller</a></li>
                                            <li><a href="shop.html">Dame’s Rocket</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">BLOG</a>
                                <ul>
                                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                    <li><a href="#">Blog Standard</a>
                                        <ul>
                                            <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                            <li><a href="blog-no-sidebar.html">no sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Post Types</a>
                                        <ul>
                                            <li><a href="blog-details-standerd.html">Standard post</a></li>
                                            <li><a href="blog-details-audio.html">audio post</a></li>
                                            <li><a href="blog-details-video.html">video post</a></li>
                                            <li><a href="blog-details-gallery.html">gallery post</a></li>
                                            <li><a href="blog-details-link.html">link post</a></li>
                                            <li><a href="blog-details-quote.html">quote post</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html"> Contact us </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- header end -->
