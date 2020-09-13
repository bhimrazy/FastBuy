@extends('client.layouts.client')
@section('body')
    <!-- Begin FB's Breadcrumb Area -->
    <div class="breadcrumb-area pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FB's Breadcrumb Area End Here -->
    <!--Checkout Area Start-->
    <div class="checkout-area pt-60 pb-30">
        <div class="container">
            @if(session()->has('cart'))
                <form action="{{route('checkout.process')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label for="billing_first_name">First Name <span class="required">*</span></label>
                                            <input id="billing_first_name" name="billing_first_name" placeholder="First Name" type="text" value="{{old('billing_first_name',$user->first_name)}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label for="billing_last_name">Last Name <span class="required">*</span></label>
                                            <input id="billing_last_name" name="billing_last_name" placeholder="Last name" type="text" value="{{old('billing_last_name',$user->last_name)}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label for="billing_email">Email Address <span class="required">*</span></label>
                                            <input id="billing_email" name="billing_email" placeholder="Email Address" type="email" value="{{old('billing_email',$user->email)}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label for="billing_phone">Phone  <span class="required">*</span></label>
                                            <input id="billing_phone" name="billing_phone" placeholder="Phone Number" value="{{old('billing_phone',$user->mobile)}}"type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label for="billing_address">Address <span class="required">*</span></label>
                                            <input id="billing_address" name="billing_address" placeholder="Address" type="text" value="{{old('billing_address',$user->billingAddress->address??'')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="country-select clearfix">
                                            <label for="billing_country">Country <span class="required">*</span></label>
                                            <select id="billing_country" name="billing_country" class="nice-select wide" required>
                                                <option data-display="Select Country">Select Country</option>
                                                <option value="Nepal" {{'Nepal'==old('billing_country',$user->billingAddress->country??'')?'selected':''}} >Nepal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label for="billing_city">Town / City <span class="required">*</span></label>
                                            <input id="billing_city" name="billing_city" placeholder="Town/City" type="text" value="{{old('billing_city',$user->billingAddress->city??'')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label for="billing_state">State / Province <span class="required">*</span></label>
                                            <input id="billing_state" name="billing_state" placeholder="State / Province" type="text" value="{{old('billing_state',$user->billingAddress->state??'')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label for="billing_post_code">Postcode / Zip <span class="required">*</span></label>
                                            <input id="billing_post_code" name="billing_post_code" placeholder="Postcode / Zip" type="text" value="{{old('billing_post_code',$user->billingAddress->post_code??'')}}"required>
                                        </div>
                                    </div>
                                </div>
                                <div class="different-address">
                                    <div class="ship-different-title">
                                        <h3>
                                            <label for="ship-box">Check this box if Billing Address and Shipping Address are the same.</label>
                                            <input id="ship-box" name="billing_too" type="checkbox" onclick="FillBilling(this.form)">
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="checkbox-form">
                                <h3>Shipping Details</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label for="shipping_first_name">First Name <span class="required">*</span></label>
                                            <input id="shipping_first_name" name="shipping_first_name" placeholder="First Name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label for="shipping_last_name">Last Name <span class="required">*</span></label>
                                            <input id="shipping_last_name" name="shipping_last_name" placeholder="Last name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label for="shipping_email">Email Address <span class="required">*</span></label>
                                            <input id="shipping_email" name="shipping_email" placeholder="Email Address" type="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label for="shipping_phone">Phone  <span class="required">*</span></label>
                                            <input id="shipping_phone" name="shipping_phone" placeholder="Phone Number" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label for="shipping_address">Address <span class="required">*</span></label>
                                            <input id="shipping_address" name="shipping_address" placeholder="Street address" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="country-select clearfix">
                                            <label for="shipping_country">Country <span class="required">*</span></label>
                                            <select id="shipping_country" name="shipping_country" class="nice-select wide" required>
                                                <option data-display="Select Country">Select Country</option>
                                                <option value="Nepal">Nepal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label for="shipping_city">Town / City <span class="required">*</span></label>
                                            <input id="shipping_city" name="shipping_city" placeholder="Town/City" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label for="shipping_state">State / Province <span class="required">*</span></label>
                                            <input id="shipping_state" name="shipping_state" placeholder="State / Province" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label for="shipping_post_code">Postcode / Zip <span class="required">*</span></label>
                                            <input id="shipping_post_code" name="shipping_post_code" placeholder="Postcode / Zip" type="text" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="cart-product-name">Product</th>
                                            <th class="cart-product-total">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cartitems as $cartitem)
                                            <tr class="cart_item">
                                                <td class="cart-product-name"> {{$cartitem['item']->title}}<strong class="product-quantity"> ×{{$cartitem['qty']}}</strong></td>
                                                <td class="cart-product-total"><span class="amount">${{$cartitem['item']->price}}</span></td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">${{$totalPrice}}</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">${{$totalPrice}}</span></strong></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Payments</h3>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <h4 class="panel-title">Choose Payment Method <span class="required">*</span></h4>
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="#payment-1">
                                                    <h5 class="panel-title">
                                                        <label><input class="" type="radio" value="Cash On Delivery" name="payment_method" required>
                                                            Cash On Delivery
                                                        </label> <br>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="#payment-2">
                                                    <h5 class="panel-title">
                                                        <label><input class="" type="radio" value="eSewa" name="payment_method" required>
                                                            eSewa
                                                        </label>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="#payment-3">
                                                    <h5 class="panel-title">
                                                        <label><input class="" type="radio" value="Bank Transfer" name="payment_method" required>
                                                            Bank Transfer
                                                        </label>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="#payment-4">
                                                    <h5 class="panel-title">
                                                        <label><input class="" type="radio" value="PayPal" name="payment_method" required>
                                                            PayPal
                                                        </label>
                                                    </h5>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="order-button-payment">
                                            <input value="Proceed to Checkout" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @else
                <div class="container">
                    <p class="display-4">Your Order Is Empty</p>
                </div>
            @endif
        </div>
        <!--Checkout Area End-->
    @endsection
    @section('scripts')
    <script>
        FillBilling =function(f) {
           // console.log();
            if(f.billing_too.checked === true) {
                f.shipping_first_name.value = f.billing_first_name.value;
                f.shipping_last_name.value = f.billing_last_name.value;
                f.shipping_email.value = f.billing_email.value;
                f.shipping_phone.value = f.billing_phone.value;
                f.shipping_address.value = f.billing_address.value;
                f.shipping_country.options[f.billing_country.options.selectedIndex].selected=true;
                f.shipping_city.value = f.billing_city.value;
                f.shipping_state.value = f.billing_state.value;
                f.shipping_post_code.value = f.billing_post_code.value;
            }
        }
    </script>
    @endsection
