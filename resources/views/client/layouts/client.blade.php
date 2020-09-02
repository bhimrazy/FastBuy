<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $pageTitle??config('settings.site_title')??config('app.name') }}</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="{{$pageDescription??config('settings.seo_meta_description')}}">
    <meta name="keywords" content="{{config('settings.seo_meta_keywords')??str_replace (" ", ", ",config('settings.site_title'))}}">
    <meta name="author" content="{{config('settings.site_author')??config('settings.site_name')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- CSS============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- Ionicons Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <!-- Ionicons Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/ionicons/css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/helper.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- Site Meta Property -->
    @include('client.includes.meta')
</head>
<body>
<!-- Begin Body Wraper Area -->
<div class="body-wrapper">
    <!-- Begin Header Area -->
    <header class="bg-midnight">
        <!-- Begin Header Top Area -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-nav">
                    <div class="row">
                        <!-- Begin Header Top Left Area Area -->
                        <div class="col-lg-5 col-md-6">
                            <div class="top-selector-wrapper">
                                <ul class="single-top-selector">
                                    <!-- Begin Language Area -->
                                    <li class="language list-inline-item">
                                        <span>Language:</span>
                                        <div class="btn-group">
                                            <button class="dropdown-toggle"><img src="{{asset('assets/images/menu/flag-icon/1.jpg')}}" alt="">English<i class="fa fa-caret-down"></i></button>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="#"><img src="{{asset('assets/images/menu/flag-icon/1.jpg')}}" alt=""> English</a></li>
                                                    <li><a href="#"><img src="{{asset('assets/images/menu/flag-icon/2.jpg')}}" alt=""> Français</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Language End Here -->
                                    <!-- Begin Currency Area -->
                                    <li class="currency list-inline-item">
                                        <span>Currency:</span>
                                        <div class="btn-group">
                                            <button class="dropdown-toggle"> USD $ <i class="fa fa-caret-down"></i></button>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="#">Euro €</a></li>
                                                    <li><a href="#" class="current">USD $</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Currency Area End Here -->
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Left Area End Here -->
                        <!-- Begin Header Top Right Area -->
                        <div class="col-lg-7 col-md-6">
                            <div class="header-top-right">
                                <ul class="user-block list-inline">
                                    @if(auth()->check())
                                        @if(auth()->user()->isAdmin())
                                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                        @else
                                            <li><a href="{{route('my-account')}}">Howdy {{ucfirst(auth()->user()->firstname)}}</a></li>
                                            <li><a href="{{route('checkout')}}">Checkout</a></li>
                                        @endif
                                            <li><a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                    @else
                                        <li><a href="{{route('register')}}">Register</a></li>
                                        <li><a href="{{route('login')}}">Sign In</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Right Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Area End Here -->
        <!-- Begin Header Middle Area -->
        <div class="header-middle">
            <div class="container logo-nav">
                <div class="row align-items-center">
                    <!-- Begin Logo Area -->
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('assets/images/menu/logo/1.jpg')??asset('storage/'.config('settings.site_logo'))}}" alt="{{config('settings.site_name')??config('app.name')}}">
                            </a>
                        </div>
                    </div>
                    <!-- Logo Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="col-lg-9">
                        <!-- Begin Header Middle Right Area -->
                        <div class="header-middle-right">
                            <!-- Begin Header Middle Searchbox Area -->
                            <form action="{{route('products.search')}}" class="hm-searchbox" method="post">
                                @csrf
                                <select name="category_id" class="nice-select select-search-category">
                                    <option selected disabled>All categories</option>
                                    @foreach(\App\Category::with('subcategories')->get() as $category)
                                        <option disabled>&nbsp;{{$category->title}}</option>
                                        @foreach($category->subcategories as $subcategory)
                                            <option value="{{$subcategory->id}}">&nbsp;&nbsp;&nbsp;&nbsp;{{$subcategory->title}}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                                <input name="query" type="text" placeholder="{{$query??'Enter your search key ...'}}" required>
                                <button class="fb-search_btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <!-- Header Middle Searchbox Area End Here -->
                            <ul class="hm-menu">
                                <!-- Begin Header Mini Cart Area -->
                                <li class="hm-minicart">
                                    <div class="hm-minicart-trigger">
                                        <span class="item-icon"></span>
                                        <span class="item-text">My Cart
                                                    <span class="cart-item-count">{{session()->has('cart')?session('cart')->totalQty:0}}</span>
                                                </span>
                                        <span class="item-total">${{session()->has('cart')?session('cart')->totalPrice:0}}</span>
                                    </div>
                                    <span></span>
                                    @if(session()->has('cart'))
                                        <div class="minicart">
                                            <ul class="minicart-product-list">
                                                @foreach(session()->get('cart')->items as $cartitem)
                                                    <li>
                                                    <a href="" class="minicart-product-image">
                                                        <img src="{{asset($cartitem['item']->media[0]->url)}}" alt="FB's Thumbnail">
                                                        <span class="product-quantity">1x</span>
                                                    </a>
                                                    <div class="minicart-product-details">
                                                        <h7><a href="">{{Str::limit($cartitem['item']->title,16)}}</a></h7>
                                                        <span>${{$cartitem['item']->price}}</span>
                                                    </div>
                                                    <button class="close" title="Remove">
                                                        <i class="fa fa-close"></i>
                                                    </button>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <div class="price-content">
                                                <p class="minicart-total">SUBTOTAL<span>${{session()->get('cart')->totalPrice}}</span></p>
                                                <p class="minicart-total">Shipping<span>$0.00</span></p>
                                                <p class="minicart-total">Taxes<span>$0.00</span></p>
                                                <p class="minicart-total">Total<span>${{session()->get('cart')->totalPrice}}</span></p>
                                            </div>
                                            <div class="minicart-button text-center">
                                                @if(url()->current()!=route('carts.index'))
                                                    <a href="{{route('carts.index')}}" class="fb-btn">
                                                        <span>View Cart</span>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                </li>
                                <!-- Header Mini Cart Area End Here -->
                            </ul>
                        </div>
                        <!-- Header Middle Right Area End Here -->
                    </div>
                    <!-- Header Middle Right Area End Here -->
                </div>
            </div>
        </div>
        <!-- Header Middle Area End Here -->
        <!-- Begin Header Bottom Area -->
        <div class="header-bottom bg-polo-blue header-sticky stick">
            <div class="container">
                <div class="row">
                    <!-- Begin Category Menu Area -->
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <!--Category Menu Start-->
                        <div class="category-menu category-menu-hidden">
                            <div class="category-heading">
                                <h2 class="categories-toggle"><span>All Categories</span></h2>
                            </div>
                            <div id="cate-toggle" class="category-menu-list">
                                <ul>
                                    <li class="right-menu"><a href="{{route('shop.index')}}"><span><img src="{{asset('assets/images/category-thumb/1.jpg')}}" alt="Category-thumb"></span>Electronics</a>
                                        <ul class="cat-mega-menu">
                                            <li class="right-menu cat-mega-title">
                                                <a href="{{route('shop.index')}}">Cameras</a>
                                                <ul>
                                                    <li><a href="#">Cords and Cables</a></li>
                                                    <li><a href="#">gps accessories</a></li>
                                                    <li><a href="#">Microphones</a></li>
                                                    <li><a href="#">Wireless Transmitters</a></li>
                                                </ul>
                                                <a class="cat-mega-title-2 pt-30 pt-sm-10 pt-xs-10" href="{{route('shop.index')}}">GamePad</a>
                                                <ul>
                                                    <li><a href="#">cube lifestyle hd</a></li>
                                                    <li><a href="#">gopro hero4</a></li>
                                                    <li><a href="#">handycam cx405</a></li>
                                                    <li><a href="#">vixia hf r600</a></li>
                                                </ul>
                                            </li>
                                            <li class="right-menu cat-mega-title">
                                                <a href="{{route('shop.index')}}">Digital Cameras</a>
                                                <ul>
                                                    <li><a href="#">Gold eye</a></li>
                                                    <li><a href="#">Questek</a></li>
                                                    <li><a href="#">Snm</a></li>
                                                    <li><a href="#">Vantech</a></li>
                                                </ul>
                                                <a class="cat-mega-title-2 pt-30 pt-sm-10 pt-xs-10" href="{{route('shop.index')}}">Virtual Reality</a>
                                                <ul>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">Toshiba</a></li>
                                                    <li><a href="#">Transcend</a></li>
                                                    <li><a href="#">Sandisk</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="right-menu"><a href="{{route('shop.index')}}"><span><img src="{{asset('assets/images/category-thumb/2.jpg')}}" alt="Category-thumb"></span>Book</a>
                                        <ul class="cat-mega-menu">
                                            <li class="right-menu cat-mega-title">
                                                <a href="{{route('shop.index')}}">Children's Books</a>
                                                <ul>
                                                    <li><a href="#">Early Learning</a></li>
                                                    <li><a href="#">Animals</a></li>
                                                    <li><a href="#">Action & Adventure</a></li>
                                                    <li><a href="#">Education & Reference</a></li>
                                                </ul>
                                            </li>
                                            <li class="right-menu cat-mega-title">
                                                <a href="{{route('shop.index')}}">comic book</a>
                                                <ul>
                                                    <li><a href="#">Superhero</a></li>
                                                    <li><a href="#">Slice-of-Life</a></li>
                                                    <li><a href="#">Humor</a></li>
                                                    <li><a href="#">Science-Fiction</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="right-menu"><a href="{{route('shop.index')}}"><span><img src="{{asset('assets/images/category-thumb/3.jpg')}}" alt="Category-thumb"></span>Home & Kitchen</a>
                                        <ul class="cat-mega-menu cat-mega-menu-2">
                                            <li class="right-menu cat-mega-title">
                                                <a href="{{route('shop.index')}}">Large Appliances</a>
                                                <ul>
                                                    <li><a href="#">Armchairs</a></li>
                                                    <li><a href="#">Bunk Bed</a></li>
                                                    <li><a href="#">Mattress</a></li>
                                                    <li><a href="#">Sideboard</a></li>
                                                </ul>
                                                <a class="cat-mega-title-2 pt-30" href="{{route('shop.index')}}">Small Appliances</a>
                                                <ul>
                                                    <li><a href="#">Bootees Bags</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Shelf</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <li class="right-menu cat-mega-title">
                                                <a href="{{route('shop.index')}}">Drinkware</a>
                                                <ul>
                                                    <li><a href="#">Tour Drinkware</a></li>
                                                    <li><a href="#">Hatch Drinkware</a></li>
                                                    <li><a href="#">Direction Drinkware</a></li>
                                                    <li><a href="#">Crescent Drinkware</a></li>
                                                </ul>
                                                <a class="cat-mega-title-2 pt-30" href="{{route('shop.index')}}">Cookware</a>
                                                <ul>
                                                    <li><a href="#">Cookware Brands</a></li>
                                                    <li><a href="#">Cookware Sets</a></li>
                                                    <li><a href="#">Individual Cookware</a></li>
                                                    <li><a href="#">Enamel Cookware</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><span><img src="{{asset('assets/images/category-thumb/6.jpg')}}" alt="Category-thumb"></span>Video games</a></li>
                                    <li><a href="#"><span><img src="{{asset('assets/images/category-thumb/7.jpg')}}" alt="Category-thumb"></span>Sport & tourisim</a></li>
                                    <li><a href="#"><span><img src="{{asset('assets/images/category-thumb/8.jpg')}}" alt="Category-thumb"></span>Fruits & Veggies</a></li>
                                    <li><a href="#"><span><img src="{{asset('assets/images/category-thumb/9.jpg')}}" alt="Category-thumb"></span>Computer & Laptop</a></li>
                                    <li><a href="#"><span><img src="{{asset('assets/images/category-thumb/10.jpg')}}" alt="Category-thumb"></span>Meat & Seafood</a></li>
                                    <li class="rx-child"><a href="#"><span><img src="{{asset('assets/images/category-thumb/11.jpg')}}" alt="Category-thumb"></span>Accessories</a></li>
                                    <li class="rx-parent">
                                        <a class="rx-default">More Categories</a>
                                        <a class="rx-show">Less Categories</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--Category Menu End-->
                    </div>
                    <!-- Category Menu Area End Here -->
                    <!-- Begin Header Bottom Menu Area -->
                    <div class="col-lg-9 d-none d-lg-block d-xl-block position-static">
                        <!-- FB's Navigation -->
                        <nav class="fb-navigation">
                            <ul>
                                <li class="active">
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('shop.index')}}">Shop</a>
                                </li>
                                <li>
                                    <a href="{{route('blog')}}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{route('about-us')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}"> Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                        <!--FB's Navigation -->
                    </div>
                    <!-- Header Bottom Menu Area End Here -->
                </div>
                <div class="row">
                    <!-- Begin Mobile Menu Area -->
                    <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                        <div class="mobile-menu"></div>
                    </div>
                    <!-- Mobile Menu Area End Here -->
                </div>
            </div>
        </div>
        <!-- Header Bottom Area End Here -->
    </header>
    <!-- Header Area End Here -->

@yield('body')
<!-- Begin FB's Branding Area -->
    <div class="fb-branding-wrap pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fb-branding bg-white">
                        <div class="fb-branding_active owl-carousel">
                            <div class="branding-item">
                                <a href="#">
                                    <img src="{{asset('assets/images/branding/1.jpg')}}" alt="FB's Branding">
                                </a>
                            </div>
                            <div class="branding-item">
                                <a href="#">
                                    <img src="{{asset('assets/images/branding/2.jpg')}}" alt="FB's Branding">
                                </a>
                            </div>
                            <div class="branding-item">
                                <a href="#">
                                    <img src="{{asset('assets/images/branding/3.jpg')}}" alt="FB's Branding">
                                </a>
                            </div>
                            <div class="branding-item">
                                <a href="#">
                                    <img src="{{asset('assets/images/branding/4.jpg')}}" alt="FB's Branding">
                                </a>
                            </div>
                            <div class="branding-item">
                                <a href="#">
                                    <img src="{{asset('assets/images/branding/5.jpg')}}" alt="FB's Branding">
                                </a>
                            </div>
                            <div class="branding-item">
                                <a href="#">
                                    <img src="{{asset('assets/images/branding/6.jpg')}}" alt="FB's Branding">
                                </a>
                            </div>
                            <div class="branding-item">
                                <a href="#">
                                    <img src="{{asset('assets/images/branding/1.jpg')}}" alt="FB's Branding">
                                </a>
                            </div>
                            <div class="branding-item">
                                <a href="#">
                                    <img src="{{asset('assets/images/branding/2.jpg')}}" alt="FB's Branding">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FB's Branding Area End Here -->
    <!-- Begin FB's Footer Area -->
    <div class="fb-footer">
        <!-- Begin Footer Top Area -->
        <div class="fb-footer_top">
            <div class="container">
                <div class="row">
                    <!-- Begin FB's Newsletters Area -->
                    <div class="col-lg-5">
                        <div class="fb-newsletters">
                            <h2 class="newsletters-headeing">Sign Up For Newsletters</h2>
                            <p class="short-desc">Be The First To Know. Sign Up For Newsletter Today</p>
                        </div>
                    </div>
                    <!-- FB's Newsletters Area End Here -->
                    <!-- Begin FB's Newsletters Form Area -->
                    <div class="col-lg-7">
                        <div class="fb-newsletters_form pt-sm-15 pt-xs-15">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <div id="mc-form" class="mc-form subscribe-form form-group" >
                                        <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email" />
                                        <button  class="btn mt-sm-15 mt-xs-15" id="mc-submit">Subscribe!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- FB's Newsletters Form Area End Here -->
                </div>
            </div>
        </div>
        <!-- Footer Top Area End Here -->
        <!-- Begin FB's Footer Middle Area -->
        <div class="fb-footer_middle bg-white">
            <div class="container">
                <!-- Begin Footer Middle Top Area -->
                <div class="footer-middle_top">
                    <div class="row">
                        <!-- Begin FB's Footer Widget Area -->
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="fb-footer_widget pt-20">
                                <h3 class="fb-footer-widget-headeing">Products</h3>
                                <ul>
                                    <li><a href="#">Prices drop</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Best sales</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">My account</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- FB's Footer Widget Area End Here -->
                        <!-- Begin FB's Footer Widget Area -->
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                            <div class="fb-footer_widget pt-20 pt-xs-0">
                                <h3 class="fb-footer-widget-headeing">Our company</h3>
                                <ul>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#">Legal Notice</a></li>
                                    <li><a href="#">Terms and conditions of use</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Stores</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- FB's Footer Widget Area End Here -->
                        <!-- Begin FB's Footer Widget Area -->
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                            <div class="fb-footer_widget pt-20 pt-xs-0">
                                <h3 class="fb-footer-widget-headeing">Your account</h3>
                                <ul>
                                    <li><a href="#">Addresses</a></li>
                                    <li><a href="#">Credit slips</a></li>
                                    <li><a href="#">Orders</a></li>
                                    <li><a href="#">Personal info</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- FB's Footer Widget Area End Here -->
                        <!-- Begin FB's Footer Widget Area -->
                        <div class="col-xl-5 col-lg-5 col-sm-7">
                            <div class="footer-widget-logo pt-30 mb-20 pt-sm-5 pt-xs-5">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets/images/menu/logo/2.png')}}" alt="FB's Logo">
                                </a>
                            </div>
                            <div class="footer-widget-info">
                                <p class="footer-widget_short-desc">We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                                </p>
                                <div class="footer-widget_address">
                                    <h2>Contact info:</h2>
                                    <p>169-C, Technohub, Dubai Silicon Oasis.</p>
                                </div>
                                <div class="footer-widget-social-link">
                                    <ul class="social-link">
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- FB's Footer Widget Area End Here -->
                    </div>
                </div>
                <!-- Footer Middle Top Area End Here -->
                <!-- Begin Footer Middle Bottom Area -->
                <div class="footer-middle-bottom">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Footer Tag Link Area -->
                            <div class="footer-tag-links pt-20 pb-20">
                                <ul>
                                    <li><a href="#">Online Shopping</a></li>
                                    <li><a href="#">Promotions</a></li>
                                    <li><a href="#">My Orders</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Most Populars</a></li>
                                    <li><a href="#">New Arrivals</a></li>
                                    <li><a href="#">Special Products</a></li>
                                    <li><a href="#">Manufacturers</a></li>
                                    <li><a href="#">Our Stores</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Payments</a></li>
                                    <li><a href="#">Warantee</a></li>
                                    <li><a href="#">Refunds</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="#">Discount</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Policy</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Payments</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Refunds</a></li>
                                </ul>
                            </div>
                            <!-- Footer Tag Link Area End Here -->
                            <!-- Begin Footer Payment Area -->
                            <div class="payment text-center pb-30">
                                <a href="#">
                                    <img src="{{asset('assets/images/payment/1.png')}}" alt="FB's Footer Payment">
                                </a>
                            </div>
                            <!-- Footer Payment Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Footer Middle Bottom Area End Here -->
            </div>
        </div>
        <!-- FB's Footer Middle Area End Here -->
        <!-- Begin Footer Bottom Area -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <!-- Begin Copyright Area -->
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright">
                            <span>{!! config('settings.footer_copyright_text')??'Copyright &copy; 2020 <a href="/">FastBuy.</a> All rights reserved.' !!} </span>
                        </div>
                    </div>
                    <!-- Copyright Area End Here -->
                    <!-- Begin Footer Bottom Menu Area -->
                    <div class="col-lg-6 col-md-6">
                        <div class="fotter-bottom_menu">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('about-us')}}">About</a></li>
                                <li><a href="{{route('shop.index')}}">Shop</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Bottom Menu Area End Here -->
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area End Here -->
    </div>
    <!-- FB's Footer Area End Here -->
</div>
<!-- Body Wraper Area End Here -->

<!-- JS        ============================================ -->
<!-- jQuery JS -->
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
<!-- App JS -->
{{--<script src="{{asset('js/app.js')}}"></script>--}}
@yield('scripts')
</body>
</html>
