@extends("frontend.layout")
@section("content")
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-image-3 ptb-150">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3>CHECKOUT</h3>
                <ul>
                    <li><a href="{{url("/home")}}">Home</a></li>
                    <li class="active">CHECKOUT</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- checkout-area start -->
    <div class="checkout-area pb-80 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="checkout-wrapper">
                        <form action="{{url("/checkout")}}" method="post">
                            @method("POST")
                            @csrf
                            <div id="faq" class="panel-group">
{{--                                <div class="panel panel-default">--}}
{{--                                    <div class="panel-heading">--}}
{{--                                        <h5 class="panel-title"><span>1.</span> <a data-toggle="collapse"--}}
{{--                                                                                   data-parent="#faq"--}}
{{--                                                                                   href="#payment-1">Checkout method</a>--}}
{{--                                        </h5>--}}
{{--                                    </div>--}}
{{--                                    <div id="payment-1" class="panel-collapse collapse show">--}}
{{--                                        <div class="panel-body">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-lg-5">--}}
{{--                                                    <div class="checkout-register">--}}
{{--                                                        <div class="title-wrap">--}}
{{--                                                            <h4 class="cart-bottom-title section-bg-white">CHECKOUT AS A--}}
{{--                                                                GUEST OR REGISTER</h4>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="register-us">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><input type="checkbox"> Checkout as Guest</li>--}}
{{--                                                                <li><input type="checkbox"> Register</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <h6>REGISTER AND SAVE TIME!</h6>--}}
{{--                                                        <div class="register-us-2">--}}
{{--                                                            <p>Register with us for future convenience.</p>--}}
{{--                                                            <ul>--}}
{{--                                                                <li>Fast and easy checkout</li>--}}
{{--                                                                <li>Easy access to your order history and status</li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <a href="#">Apply Coupon</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-7">--}}
{{--                                                    <div class="checkout-login">--}}
{{--                                                        <div class="title-wrap">--}}
{{--                                                            <h4 class="cart-bottom-title section-bg-white">LOGIN</h4>--}}
{{--                                                        </div>--}}
{{--                                                        <p>Already have an account? </p>--}}
{{--                                                        <span>Please log in below:</span>--}}
{{--                                                        <form>--}}
{{--                                                            <div class="login-form">--}}
{{--                                                                <label>Email Address * </label>--}}
{{--                                                                <input type="email" name="email">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="login-form">--}}
{{--                                                                <label>Password *</label>--}}
{{--                                                                <input type="password" name="email">--}}
{{--                                                            </div>--}}
{{--                                                        </form>--}}
{{--                                                        <div class="login-forget">--}}
{{--                                                            <a href="#">Forgot your password?</a>--}}
{{--                                                            <p>* Required Fields</p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="checkout-login-btn">--}}
{{--                                                            <a href="#">Login</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>1.</span> <a data-toggle="collapse"
                                                                                   data-parent="#faq"
                                                                                   href="#payment-2">billing
                                                information</a>
                                        </h5>
                                    </div>
                                    <div id="payment-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="billing-information-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>User Name</label>
                                                            <input type="text" name="username"
                                                                   value="{{\Illuminate\Support\Facades\Auth::user()->__get("name")}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Address</label>
                                                            <input type="text" name="address">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Telephone</label>
                                                            <input type="text" name="telephone">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>notes</label>
                                                            <input type="text" name="note">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="panel panel-default">--}}
{{--                                    <div class="panel-heading">--}}
{{--                                        <h5 class="panel-title"><span>3.</span> <a data-toggle="collapse"--}}
{{--                                                                                   data-parent="#faq"--}}
{{--                                                                                   href="#payment-3">shipping--}}
{{--                                                information</a></h5>--}}
{{--                                    </div>--}}
{{--                                    <div id="payment-3" class="panel-collapse collapse ">--}}
{{--                                        <div class="panel-body">--}}
{{--                                            <div class="shipping-information-wrapper">--}}
{{--                                                <div class="shipping-info-2">--}}
{{--                                                    <span>HasTech</span>--}}
{{--                                                    <span>Bonosrie</span>--}}
{{--                                                    <span>D - Block</span>--}}
{{--                                                    <span>Dkaka, 1201</span>--}}
{{--                                                    <span>Bangladesh</span>--}}
{{--                                                    <span>T: +8800 879 9876 </span>--}}
{{--                                                </div>--}}
{{--                                                <div class="edit-address">--}}
{{--                                                    <a href="#">Edit Address</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="billing-select">--}}
{{--                                                    <select class="email s-email s-wid">--}}
{{--                                                        <option>Select Your Address</option>--}}
{{--                                                        <option>Add New Address</option>--}}
{{--                                                        <option>Dkaka, 1201, Bangladesh</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                                <div class="ship-wrapper">--}}
{{--                                                    <div class="single-ship">--}}
{{--                                                        <input type="checkbox" checked="" value="address"--}}
{{--                                                               name="address">--}}
{{--                                                        <label>Use Billing Address</label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="billing-back-btn">--}}
{{--                                                    <div class="billing-back">--}}
{{--                                                        <a href="#"><i class="ion-arrow-up-c"></i> back</a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="billing-btn">--}}
{{--                                                        <button type="submit">Continue</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>2. </span> <a data-toggle="collapse"
                                                                                   data-parent="#faq"
                                                                                   href="#payment-6">Order Review</a>
                                        </h5>
                                    </div>
                                    <div id="payment-6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="order-review-wrapper">
                                                <div class="order-review">
                                                    <div class="checkout__order">
                                                        <h4>Your Order</h4>
                                                        {{--                                                            <form action="{{url("/checkout")}}"  method="post">--}}
                                                        {{--                                                                @method("POST")--}}
                                                        {{--                                                                @csrf--}}
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="checkout__order">
                                                                    <div class="checkout__order__products">Products
                                                                        <span>Total</span></div>
                                                                    <ul>
                                                                        @php $grandTotal = 0 @endphp
                                                                        @foreach($cart->getItems as $item)
                                                                            <li>{{$item->__get("product_name")}}
                                                                                <span>${{$item->__get("price")* $item->pivot->__get("qty")}}</span>
                                                                            </li>
                                                                            @php $grandTotal += ($item->__get("price")* $item->pivot->__get("qty"))@endphp
                                                                        @endforeach
                                                                    </ul>
                                                                    <div class="checkout__order__subtotal">Subtotal
                                                                        <span>${{$grandTotal}}</span></div>
                                                                    <div class="checkout__order__total">Total
                                                                        <span>${{$grandTotal}}</span></div>
                                                                    <button type="submit" class="site-btn">PLACE ORDER
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                        </form>
                    </div>
                    <div class="billing-back-btn">
                                                        <span>
                                                            Forgot an Item?
                                                            <a href="#"> Edit Your Cart.</a>

                                                        </span>
                        <div class="billing-btn">
                            <button type="submit">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3">
        <div class="checkout-progress">
            <h4>Checkout Progress</h4>
            <ul>
                <li style="background-color: whitesmoke;padding-top: 5px">1. Billing Information</li>
                <li>2. Order Review</li>
            </ul>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection