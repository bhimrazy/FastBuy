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
                                    @foreach($cart_items as $cart_item)
                                        <tr>
                                            <td class="fb-product-thumbnail"><img width="90" height="100" src="{{asset($cart_item['item']->media->first()->url)}}" alt="{{$cart_item['item']->title}}"></td>
                                            <td class="fb-product-name">{{$cart_item['item']->title}}</td>
                                            <td class="fb-product-price"><span class="amount">${{$cart_item['item']->price}}</span></td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <div style="cursor: pointer;padding: 12px 14px 9px 16px;" class="inc" onclick="updateCartInc({{$cart_item['item']->id}})">
                                                    <i class="fa fa-plus">&nbsp;</i>
                                                </div>
                                                <input class="cart-plus-minus-box input-sm text-center" name="cart_item_qty" type="number" value="{{$cart_item['qty']}}" id="{{$cart_item['item']->id}}" readonly>
                                                <div style="cursor: pointer;padding: 12px 14px 9px 16px;" class="dec" onclick="updateCartDec({{$cart_item['item']->id}})">
                                                    <i class="fa fa-minus">&nbsp;</i>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">${{$cart_item['price']}}</span></td>
                                            <td class="fb-product-remove">
                                                <a href="{{route('carts.delete',['id'=>$cart_item['item']->id])}}" class="btn btn-danger"><span><i
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
                                        <a href="{{route('checkout')}}">Proceed to checkout</a>
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
@section('scripts')
    <script>
        function updateCartInc(id) {
            //console.log(id)
            var CSRF_TOKEN=$('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('carts.increaseByOne') }}',
                data: {_token:CSRF_TOKEN,'id': id},
                error: function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    setTimeout(function(){
                        location.reload()
                    },1000);
                    alert(err);
                },
                success: function (data) {
                    if(data.success){
                        setTimeout(function(){
                            location.reload();
                        },100);
                    }
                }
            });

        }
        function updateCartDec(id) {
            //console.log(id)
            var CSRF_TOKEN=$('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('carts.reduceByOne') }}',
                data: {_token:CSRF_TOKEN,'id': id},
                error: function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    setTimeout(function(){
                        location.reload()
                    },1000);
                    alert(err);
                },
                success: function (data) {
                    if(data.success){
                        setTimeout(function(){
                            location.reload();
                        },100);
                    }
                }
            });

        }
    </script>
@endsection
@section('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
