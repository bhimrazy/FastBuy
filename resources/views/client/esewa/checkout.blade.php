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
                            <li class="active">Payment with eSewa</li>
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
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                    <!-- Payment Form-->
                    <div class="col-md-6">
                        <h3>Pay With </h3>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <form action="https://uat.esewa.com.np/epay/main" method="POST">
                                    <input value="{{$order->grand_total}}" name="amt" type="hidden">
                                    <input value="0" name="txAmt" type="hidden">
                                    <input value="0" name="psc" type="hidden">
                                    <input value="0" name="pdc" type="hidden">
                                    <input value="epay_payment" name="scd" type="hidden">
                                    <input value="{{$order->order_number}}" name="pid" type="hidden">
                                    <input value="{{route('esewa.success')}}" type="hidden" name="su">
                                    <input value="{{route('esewa.fail')}}" type="hidden" name="fu">
                                    <input type="image" src="https://esewa.com.np/common/images/esewa_logo.png" width="50%" height="auto" alt="Submit">
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
        <!--Checkout Area End-->
@endsection
