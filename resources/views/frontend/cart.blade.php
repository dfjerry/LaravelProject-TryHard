@extends("frontend.layout")
@section("content")
    <div class="breadcrumb-area bg-image-3 ptb-150">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3>CART PAGE</h3>
                <ul>
                    <li><a href="{{url("/")}}">Home</a></li>
                    <li class="active">Cart page</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- shopping-cart-area start -->
    <div class="cart-main-area ptb-100">
        <div class="container">
            <h3 class="page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $p)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="{{$p->getImage()}}" alt=""
                                                             style="width: 300px; height: 300px" alt=""></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$p->__get("product_name")}}</a></td>
                                        <td class="product-price-cart"><span class="amount">{{$p->getPrice()}}</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="pro-dec-cart">
                                                <input class="cart-plus-minus-box" type="text" value="{{$p->cart_qty}}"
                                                       name="qtybutton">
                                            </div>
                                        </td>
                                        <td class="product-subtotal"> ${{$p->cart_qty * $p->__get("price")}}</td>
                                        <td class="product-remove">
                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="{{url("/home")}}">Continue Shopping</a>
                                    </div>
                                    <div class="cart-clear">
                                        <button>Update Shopping Cart</button>
                                        <a href="#">Clear Shopping Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="cart-tax">--}}
{{--                                <div class="title-wrap">--}}
{{--                                    <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>--}}
{{--                                </div>--}}
{{--                                <div class="tax-wrapper">--}}
{{--                                    <p>Enter your destination to get a shipping estimate.</p>--}}
{{--                                    <div class="tax-select-wrapper">--}}
{{--                                        <div class="tax-select">--}}
{{--                                            <label>--}}
{{--                                                * Country--}}
{{--                                            </label>--}}
{{--                                            <select class="email s-email s-wid">--}}
{{--                                                <option>Bangladesh</option>--}}
{{--                                                <option>Albania</option>--}}
{{--                                                <option>Åland Islands</option>--}}
{{--                                                <option>Afghanistan</option>--}}
{{--                                                <option>Belgium</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="tax-select">--}}
{{--                                            <label>--}}
{{--                                                * Region / State--}}
{{--                                            </label>--}}
{{--                                            <select class="email s-email s-wid">--}}
{{--                                                <option>Bangladesh</option>--}}
{{--                                                <option>Albania</option>--}}
{{--                                                <option>Åland Islands</option>--}}
{{--                                                <option>Afghanistan</option>--}}
{{--                                                <option>Belgium</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="tax-select">--}}
{{--                                            <label>--}}
{{--                                                * Zip/Postal Code--}}
{{--                                            </label>--}}
{{--                                            <input type="text">--}}
{{--                                        </div>--}}
{{--                                        <button class="cart-btn-2" type="submit">Get A Quote</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-lg-6 col-md-12">
                            <div class="discount-code-wrapper">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                </div>
                                <div class="discount-code">
                                    <p>Enter your coupon code if you have one.</p>
                                    <form>
                                        <input type="text" required="" name="name">
                                        <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>
                                <h5>Total products <span>${{$grandTotal}}</span></h5>
                                <h4 class="grand-totall-title">Grand Total <span>${{$grandTotal}}</span></h4>
                                <a href="{{url("/checkout")}}">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
