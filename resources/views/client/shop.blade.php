@extends('client.layouts.client')
@section('body')
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Li's Content Wraper Area -->
    <div class="content-wraper">
        <div id="app" class="container">
            <shop-component :categories="{{$categories}}" :brands="{{$brands}}" :products="{{$products}}" base_url="{{$baseUrl}}"></shop-component>
        </div>
    </div>
    <!-- Content Wraper Area End Here -->
@endsection
@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
@endsection
