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
            @include('client.includes.alert')
        </div>
    </div>
    <!-- FB's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if(session()->has('cart'))
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="fb-product-thumbnail">images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="fb-product-price">Unit Price</th>
                                        <th class="fb-product-quantity">Quantity</th>
                                        <th class="fb-product-subtotal">Total</th>
                                        <th class="fb-product-remove">remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cartitems as $cartitem)
                                        <tr>
                                            <td class="fb-product-thumbnail"><img width="90" height="100" src="{{asset($cartitem['item']->media->first()->url)}}" alt="{{$cartitem['item']->title}}"></td>
                                            <td class="fb-product-name">{{$cartitem['item']->title}}</td>
                                            <td class="fb-product-price"><span class="amount">${{$cartitem['item']->price}}</span></td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <p class="cart-plus-minus-box">{{$cartitem['qty']}}</p>
                                                    <a href="{{route('carts.reduceByOne',['id'=>$cartitem['item']->id])}}"><i class="fa fa-angle-down"></i></a>
                                                    <a href="{{route('carts.increaseByOne',['id'=>$cartitem['item']->id])}}"><i class="fa fa-angle-up"></i></a>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">${{$cartitem['price']}}</span></td>
                                            <td class="fb-product-remove">
                                                <a href="{{route('carts.delete',['id'=>$cartitem['item']->id])}}" class="btn btn-danger"><span><i
                                                            class="fas fa-trash-alt"></i></span> Delete <i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <li>Subtotal <span>${{$totalPrice}}</span></li>
                                            <li>Total <span>${{$totalPrice}}</span></li>
                                        </ul>
                                        <a href="/checkout">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @else
                        <p>YOUR CART IS EMPTY</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->
@endsection
