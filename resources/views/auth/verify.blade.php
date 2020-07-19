@extends('client.layouts.client')

@section('body')
    <!-- Begin FB's Breadcrumb Area -->
    <div class="breadcrumb-area pt-30">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Verify Your Email : {{auth()->user()->email??''}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FB's Breadcrumb Area End Here -->
    <!-- Begin Login Content Area -->
    <div class="page-section pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                   <div class="login-form">
                            <h4 class="login-title">{{ __('Verify Your Email Address') }}</h4>
                            <div class="row">
                                @include('client.includes.alert')
                                <div class="col-md-12 col-12 mb-20">
                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email') }},
                                </div>
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <div class="col-md-6 mb-20">
                                        <button type="submit" class="btn btn-primary mt-0">{{ __('click here to request another') }}</button>
                                    </div>
                                </form>
                            </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content Area End Here -->
@endsection
