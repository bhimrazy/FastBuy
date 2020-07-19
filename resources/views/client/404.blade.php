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
                            <li class="active">Error 404</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FB's Breadcrumb Area End Here -->
    <!-- content-wraper start -->
    <div class="content-wraper pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto text-center">
                    <div class="search-error-wrapper">
                        <h1>404</h1>
                        <h2>PAGE NOT BE FOUND</h2>
                        <p class="home-link">Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable.</p>
                        <form action="#" class="error-form">
                            <div class="error-form-input">
                                <input type="text" placeholder="Search..." class="error-input-text">
                                <button type="submit" class="error-s-button"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                        <a href="{{route('home')}}" class="home-bacck-button">Back to home page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wraper end -->
@endsection
