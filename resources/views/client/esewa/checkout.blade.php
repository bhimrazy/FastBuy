@extends('client.layouts.client')
@section('body')
    <!-- Begin FB's Breadcrumb Area -->
    <div class="breadcrumb-area pt-30 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FB's Breadcrumb Area End Here -->
    <!-- Begin Page Content Area -->
    <main class="page-content">
        <!-- About Page Area -->
        <div class="title m-b-md">
            eSewa Checkout
        </div>

        <div class="links">

            @if($message = session('message'))
                <p>
                    {{ $message }}
                </p>
            @endif

            <p>
                <strong>QuietComfort® 25 Acoustic Noise Cancelling® headphones — Apple devices</strong>
            </p>

            <br>

            <form method="POST" action="{{ route('checkout.payment.esewa.process', $order->id) }}">

                @csrf

                <button class="btn btn-primary" type="submit">
                    ${{ $order->grand_total }} Pay with eSewa
                </button>
            </form>
        </div>
    </main>
    <!--Page Content Area End Here -->
@endsection
