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
                            <li class="active">Register</li>
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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">{{ __('Register') }}</h4>
                            <div class="row">
                                <div class="col-md-6 col-12 mb-20">
                                    <label for="first_name">{{ __('First Name') }}</label>
                                    <input id="first_name" type="text" placeholder="First Name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label for="last_name">{{__('Last Name')}}</label>
                                    <input id="last_name" type="text" placeholder="Last Name" class="mb-0 form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                    @error('last_name')
                                    <span class="text-danger">
                                        <p>{{ $message}} </p>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label for="email">{{ __('Email Address') }}*</label>
                                    <input id="email" type="email" placeholder="Email Address" class="mb-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="text-danger">
                                        <p>{{ $message }}</p>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" placeholder="Password" class="mb-0 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="text-danger">
                                        <p>{{ $message }}</p>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" placeholder="Confirm Password" class="mb-0 form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <button class="register-button mt-0"> {{ __('Register') }}</button>
                                </div>
                                <div class="col-md-6 mb-20 text-md-right">
                                    <a href="{{ route('login') }}">
                                        {{ __('Already Have an account?') }}
                                    </a>
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
