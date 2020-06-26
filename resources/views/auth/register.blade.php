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
                                    <label for="firstname">{{ __('First Name') }}</label>
                                    <input id="firstname" type="text" placeholder="First Name" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label for="lastname">{{__('Last Name')}}</label>
                                    <input id="lastname" type="text" placeholder="Last Name" class="mb-0 form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                    @error('lastname')
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
                                <div class="col-12">
                                    <button class="register-button mt-0"> {{ __('Register') }}</button>
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
