@extends("frontend.layout")
@section("content")
    <div class="checkout-area pb-80 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="checkout-wrapper">
                        <div id="faq" class="panel-group">
                            <form action="{{url("/checkout")}}" method="post">
                                @method("POST")
                                @csrf
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title"><span>1.</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-2">Billing information</a></h5>
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
                                    <h5 class="panel-title"><span>2.</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-5">payment information</a></h5>
                                </div>
                                <div id="payment-5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="payment-info-wrapper">
                                            <div class="ship-wrapper">
                                                <div class="single-ship">
                                                    <input type="radio" checked="" value="address" name="address">
                                                    <label>Check / Money order </label>
                                                </div>
                                                <div class="single-ship">
                                                    <input type="radio" value="dadress" name="address">
                                                    <label>Credit Card (saved) </label>
                                                </div>
                                            </div>
                                            <div class="payment-info">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Name on Card </label>
                                                            <input type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-select">
                                                            <label>Credit Card Type</label>
                                                            <select>
                                                                <option>American Express</option>
                                                                <option>Visa</option>
                                                                <option>MasterCard</option>
                                                                <option>Discover</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Credit Card Number </label>
                                                            <input type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="expiration-date">
                                                    <label>Expiration Date </label>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-select">
                                                                <select>
                                                                    <option>Month</option>
                                                                    <option>January</option>
                                                                    <option>February</option>
                                                                    <option> March</option>
                                                                    <option>April</option>
                                                                    <option> May</option>
                                                                    <option>June</option>
                                                                    <option>July</option>
                                                                    <option>August</option>
                                                                    <option>September</option>
                                                                    <option> October</option>
                                                                    <option> November</option>
                                                                    <option> December</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-select">
                                                                <select>
                                                                    <option>Year</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                    <option>2019</option>
                                                                    <option>2020</option>
                                                                    <option>2021</option>
                                                                    <option>2022</option>
                                                                    <option>2023</option>
                                                                    <option>2024</option>
                                                                    <option>2025</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Card Verification Number</label>
                                                            <input type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-back">
                                                    <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                                                </div>
                                                <div class="billing-btn">
                                                    <button type="submit">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title"><span>3.</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-6">Order information</a></h5>
                                </div>
                                <div id="payment-6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="order-review-wrapper">
                                            <div class="order-review">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th class="width-1">Product Name</th>
                                                            <th class="width-3">QTY</th>
                                                            <th class="width-2">Price</th>
                                                            <th class="width-4">Subtotal</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @php $grandTotal = 0 @endphp
                                                        @foreach($cart->getItems as $item)
                                                        <tr>
                                                            <td>
                                                                <div class="o-pro-dec">
                                                                    <p>{{$item->__get("product_name")}}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-qty">
                                                                    <p>{{$item->pivot->__get("qty")}}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-price">
                                                                    <p>{{"$".number_format($item->__get("price"))}}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="o-pro-subtotal">
                                                                    <p>{{"$".number_format($item->__get("price")* $item->pivot->__get("qty"))}}</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @php $grandTotal += ($item->__get("price")* $item->pivot->__get("qty"))@endphp
                                                        @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <td colspan="3" class="text-black-400">Subtotal </td>
                                                            <td colspan="1">{{"$".number_format($grandTotal)}}</td>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <div class="billing-back-btn">
                                                        <span>
                                                            Forgot an Item?
                                                            <a href={{url("/shopping-cart")}}> Edit Your Cart.</a>

                                                        </span>
                                                    <div class="billing-btn">
                                                        <button type="submit" class="btn btn-success pb-4">Pay Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="checkout-progress">
                        <h4>Checkout Progress</h4>
                        <ul>
                            <li class="progress1" style="background-color: #ededed;padding-top: 10px;">1 .Billing Information</li>
                            <li class="progress2">2 .Payment Infomation</li>
                            <li class="progress3">3 .Order Information</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
