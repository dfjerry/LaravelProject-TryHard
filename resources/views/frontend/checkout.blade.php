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
@endsection
