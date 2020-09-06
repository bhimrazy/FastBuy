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
                            <li class="active">{{ __('Reset Password') }}</li>
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
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                    <!-- Login Form s-->
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="login-form">
                            <h4 class="login-title">{{ __('Reset Password') }}</h4>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label for="email">{{ __('E-Mail Address') }}*</label>
                                    <input id="email" type="email" placeholder="Email Address" class="mb-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" placeholder="Password" class="mb-0 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" placeholder="Confirm Password" class="mb-0 form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="col-md-12">
                                    <button class="register-button mt-0"> {{ __('Reset Password') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content Area End Here -->
@endsection
