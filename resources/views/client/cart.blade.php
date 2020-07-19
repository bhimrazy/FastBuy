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
                            <li class="active">Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FB's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="fb-product-remove">remove</th>
                                    <th class="fb-product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="fb-product-price">Unit Price</th>
                                    <th class="fb-product-quantity">Quantity</th>
                                    <th class="fb-product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="fb-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    <td class="fb-product-thumbnail"><a href="#"><img src="{{asset('assets/images/product-thumb/6.png')}}" alt="FB's Product Image"></a></td>
                                    <td class="fb-product-name"><a href="#">Accusantium dolorem1</a></td>
                                    <td class="fb-product-price"><span class="amount">$46.80</span></td>
                                    <td class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$70.00</span></td>
                                </tr>
                                <tr>
                                    <td class="fb-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    <td class="fb-product-thumbnail"><a href="#"><img src="{{asset('assets/images/product-thumb/3.png')}}" alt="FB's Product Image"></a></td>
                                    <td class="fb-product-name"><a href="#">Mug Today is a good day</a></td>
                                    <td class="fb-product-price"><span class="amount">$71.80</span></td>
                                    <td class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$60.50</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                        <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                    </div>
                                    <div class="coupon2">
                                        <input class="button" name="update_cart" value="Update cart" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <li>Subtotal <span>$130.00</span></li>
                                        <li>Total <span>$130.00</span></li>
                                    </ul>
                                    <a href="#">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->
@endsection
