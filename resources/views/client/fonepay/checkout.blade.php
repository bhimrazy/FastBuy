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
                            <li class="active">Payment with Fonepay</li>
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
                                <form action="https://dev-merchantapi.fonepay.com/api/merchantRequest" method="POST">
                                    <input type="hidden"  name="PID" value="{{$fonepay['PID']}}" />
                                    <input type="hidden" name="MD"  value="{{$fonepay['MD']}}" />
                                    <input type="hidden" name="PRN" value="{{$fonepay['PRN']}}" />
                                    <input type="hidden"  name="AMT" value="{{$fonepay['AMT']}}" />
                                    <input type="hidden"  name="CRN" value="{{$fonepay['CRN']}}" />
                                    <input type="hidden"  name="DT" value="{{$fonepay['DT']}}" />
                                    <input type="hidden"  name="R1" value="{{$fonepay['R1']}}" />
                                    <input type="hidden"  name="R2" value="{{$fonepay['R2']}}" />
                                    <input type="hidden"  name="DV" value="{{$fonepay['DV']}}" />
                                    <input type="hidden"  name="RU" value="{{$fonepay['RU']}}" />
                                    <input type="image" src="https://www.fonepay.com/theme/images/fonepay_logo.png" width="50%" height="auto" alt="Submit">
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
