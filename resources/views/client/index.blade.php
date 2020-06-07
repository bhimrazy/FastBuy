@extends('client.layouts.client')
@section('body')

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
                                        <li><a href="{{route('my-account')}}">My Account</a></li>
                                        <li><a href="{{route('checkout')}}">Checkout</a></li>
                                        <li><a href="{{route('login-register')}}">Sign In</a></li>
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
                                    <img src="{{asset('assets/images/menu/logo/1.jpg')}}" alt="FB's Logo">
                                </a>
                            </div>
                        </div>
                        <!-- Logo Area End Here -->
                        <!-- Begin Header Middle Right Area -->
                        <div class="col-lg-9">
                            <!-- Begin Header Middle Right Area -->
                            <div class="header-middle-right">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                        <option value="0">All categories</option>
                                        <option value="12">Electronics</option>
                                        <option value="23">Cameras</option>
                                        <option value="27">Cords and Cables</option>
                                        <option value="28">gps accessories</option>
                                        <option value="29">Microphones</option>
                                        <option value="30">Wireless Transmitters</option>
                                        <option value="24">GamePad</option>
                                        <option value="31">cube lifestyle hd</option>
                                        <option value="32">gopro hero4</option>
                                        <option value="33">handycam cx405</option>
                                        <option value="34">vixia hf r600</option>
                                        <option value="25">Digital Cameras</option>
                                        <option value="35">Gold eye</option>
                                        <option value="36">Questek</option>
                                        <option value="37">Snm</option>
                                        <option value="38">Vantech</option>
                                        <option value="26">Virtual Reality</option>
                                        <option value="39">Samsung</option>
                                        <option value="40">Toshiba</option>
                                        <option value="41">Transcend</option>
                                        <option value="42">Sandisk</option>
                                        <option value="13">Book</option>
                                        <option value="43">Children's Books</option>
                                        <option value="45">Early Learning</option>
                                        <option value="46">Animals</option>
                                        <option value="47">Action</option>
                                        <option value="48">Education</option>
                                        <option value="44">comic book</option>
                                        <option value="49">Superhero</option>
                                        <option value="50">Slice-of-Life</option>
                                        <option value="51">Humor</option>
                                        <option value="52">Science-Fiction</option>
                                        <option value="14">Kitchen</option>
                                        <option value="53">Large Appliances</option>
                                        <option value="55">Armchairs</option>
                                        <option value="56">Bunk Bed</option>
                                        <option value="57">Mattress</option>
                                        <option value="58">Sideboard</option>
                                        <option value="54">Small Appliances</option>
                                        <option value="59">Bootees Bags</option>
                                        <option value="60">Jackets</option>
                                        <option value="61">Shelf</option>
                                        <option value="62">Shoes</option>
                                        <option value="83">Drinkware</option>
                                        <option value="85">Tour Drinkware</option>
                                        <option value="86">Hatch Drinkware</option>
                                        <option value="87">Direction Drinkware</option>
                                        <option value="88">Crescent Drinkware</option>
                                        <option value="84">Cookware</option>
                                        <option value="89">Cookware Brands</option>
                                        <option value="90">Cookware Sets</option>
                                        <option value="91">Individual Cookware</option>
                                        <option value="92">Enamel Cookware</option>
                                        <option value="15">Tablets</option>
                                        <option value="63">Tablet</option>
                                        <option value="65">Samsung</option>
                                        <option value="66">LG</option>
                                        <option value="67">Apple</option>
                                        <option value="68">Sony</option>
                                        <option value="64">Smartphone</option>
                                        <option value="69">Nokia</option>
                                        <option value="70">Sony</option>
                                        <option value="71">Apple</option>
                                        <option value="72">Samsung</option>
                                        <option value="16">Furnitured</option>
                                        <option value="73">bedroom</option>
                                        <option value="75">Bed</option>
                                        <option value="76">lamp</option>
                                        <option value="77">Mattress Sets</option>
                                        <option value="78">Home Office</option>
                                        <option value="74">livingroom</option>
                                        <option value="79">chair</option>
                                        <option value="80">table</option>
                                        <option value="81">carpet</option>
                                        <option value="82">Sofa</option>
                                        <option value="17">Video games</option>
                                        <option value="18">Sport</option>
                                        <option value="19">Fruits</option>
                                        <option value="20">Computer</option>
                                        <option value="21">Meat</option>
                                        <option value="22">Accessories</option>
                                    </select>
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="fb-search_btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <ul class="hm-menu">
                                    <!-- Begin Header Mini Cart Area -->
                                    <li class="hm-minicart">
                                        <div class="hm-minicart-trigger">
                                            <span class="item-icon"></span>
                                            <span class="item-text">My Cart
                                                    <span class="cart-item-count">2</span>
                                                </span>
                                            <span class="item-total">$120.00</span>
                                        </div>
                                        <span></span>
                                        <div class="minicart">
                                            <ul class="minicart-product-list">
                                                <li>
                                                    <a href="{{route('product-details')}}" class="minicart-product-image">
                                                        <img src="{{asset('assets/images/minicart/1.jpg')}}" alt="FB's Thumbnail">
                                                        <span class="product-quantity">1x</span>
                                                    </a>
                                                    <div class="minicart-product-details">
                                                        <h6><a href="{{route('product-details')}}">Printed Dress</a></h6>
                                                        <span>$23.39</span>
                                                    </div>
                                                    <button class="close" title="Remove">
                                                        <i class="fa fa-close"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="" class="minicart-product-image">
                                                        <img src="{{asset('assets/images/minicart/2.jpg')}}" alt="FB's Thumbnail">
                                                        <span class="product-quantity">1x</span>
                                                    </a>
                                                    <div class="minicart-product-details">
                                                        <h6><a href="{{route('product-details')}}">Printed Chiffon Dress</a></h6>
                                                        <span>$16.40</span>
                                                    </div>
                                                    <button class="close" title="Remove">
                                                        <i class="fa fa-close"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="price-content">
                                                <p class="minicart-total">SUBTOTAL<span>$39.79</span></p>
                                                <p class="minicart-total">Shipping<span>$7.00</span></p>
                                                <p class="minicart-total">Taxes<span>$0.00</span></p>
                                                <p class="minicart-total">Total<span>$46.79</span></p>
                                            </div>
                                            <div class="minicart-button text-center">
                                                <a href="{{route('checkout')}}" class="fb-btn">
                                                    <span>Checkout</span>
                                                </a>
                                            </div>
                                        </div>
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
                                        <li class="right-menu"><a href="{{route('shop-left-sidebar')}}"><span><img src="assets/images/category-thumb/1.jpg" alt="Category-thumb"></span>Electronics</a>
                                            <ul class="cat-mega-menu">
                                                <li class="right-menu cat-mega-title">
                                                    <a href="{{route('shop-left-sidebar')}}">Cameras</a>
                                                    <ul>
                                                        <li><a href="#">Cords and Cables</a></li>
                                                        <li><a href="#">gps accessories</a></li>
                                                        <li><a href="#">Microphones</a></li>
                                                        <li><a href="#">Wireless Transmitters</a></li>
                                                    </ul>
                                                    <a class="cat-mega-title-2 pt-30 pt-sm-10 pt-xs-10" href="{{route('shop-left-sidebar')}}">GamePad</a>
                                                    <ul>
                                                        <li><a href="#">cube lifestyle hd</a></li>
                                                        <li><a href="#">gopro hero4</a></li>
                                                        <li><a href="#">handycam cx405</a></li>
                                                        <li><a href="#">vixia hf r600</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="{{route('shop-left-sidebar')}}">Digital Cameras</a>
                                                    <ul>
                                                        <li><a href="#">Gold eye</a></li>
                                                        <li><a href="#">Questek</a></li>
                                                        <li><a href="#">Snm</a></li>
                                                        <li><a href="#">Vantech</a></li>
                                                    </ul>
                                                    <a class="cat-mega-title-2 pt-30 pt-sm-10 pt-xs-10" href="{{route('shop-left-sidebar')}}">Virtual Reality</a>
                                                    <ul>
                                                        <li><a href="#">Samsung</a></li>
                                                        <li><a href="#">Toshiba</a></li>
                                                        <li><a href="#">Transcend</a></li>
                                                        <li><a href="#">Sandisk</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="right-menu"><a href="{{route('shop-left-sidebar')}}"><span><img src="assets/images/category-thumb/2.jpg" alt="Category-thumb"></span>Book</a>
                                            <ul class="cat-mega-menu">
                                                <li class="right-menu cat-mega-title">
                                                    <a href="{{route('shop-left-sidebar')}}">Children's Books</a>
                                                    <ul>
                                                        <li><a href="#">Early Learning</a></li>
                                                        <li><a href="#">Animals</a></li>
                                                        <li><a href="#">Action & Adventure</a></li>
                                                        <li><a href="#">Education & Reference</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="{{route('shop-left-sidebar')}}">comic book</a>
                                                    <ul>
                                                        <li><a href="#">Superhero</a></li>
                                                        <li><a href="#">Slice-of-Life</a></li>
                                                        <li><a href="#">Humor</a></li>
                                                        <li><a href="#">Science-Fiction</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="right-menu"><a href="{{route('shop-left-sidebar')}}"><span><img src="assets/images/category-thumb/3.jpg" alt="Category-thumb"></span>Home & Kitchen</a>
                                            <ul class="cat-mega-menu cat-mega-menu-2">
                                                <li class="right-menu cat-mega-title">
                                                    <a href="{{route('shop-left-sidebar')}}">Large Appliances</a>
                                                    <ul>
                                                        <li><a href="#">Armchairs</a></li>
                                                        <li><a href="#">Bunk Bed</a></li>
                                                        <li><a href="#">Mattress</a></li>
                                                        <li><a href="#">Sideboard</a></li>
                                                    </ul>
                                                    <a class="cat-mega-title-2 pt-30" href="{{route('shop-left-sidebar')}}">Small Appliances</a>
                                                    <ul>
                                                        <li><a href="#">Bootees Bags</a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Shelf</a></li>
                                                        <li><a href="#">Shoes</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="{{route('shop-left-sidebar')}}">Drinkware</a>
                                                    <ul>
                                                        <li><a href="#">Tour Drinkware</a></li>
                                                        <li><a href="#">Hatch Drinkware</a></li>
                                                        <li><a href="#">Direction Drinkware</a></li>
                                                        <li><a href="#">Crescent Drinkware</a></li>
                                                    </ul>
                                                    <a class="cat-mega-title-2 pt-30" href="{{route('shop-left-sidebar')}}">Cookware</a>
                                                    <ul>
                                                        <li><a href="#">Cookware Brands</a></li>
                                                        <li><a href="#">Cookware Sets</a></li>
                                                        <li><a href="#">Individual Cookware</a></li>
                                                        <li><a href="#">Enamel Cookware</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="right-menu"><a href="{{route('shop-left-sidebar')}}"><span><img src="assets/images/category-thumb/4.jpg" alt="Category-thumb"></span>Phones & Tablets</a>
                                            <ul class="cat-mega-menu">
                                                <li class="right-menu cat-mega-title">
                                                    <a href="{{route('shop-left-sidebar')}}">Tablet</a>
                                                    <ul>
                                                        <li><a href="#">Chamcham</a></li>
                                                        <li><a href="#">Sanai</a></li>
                                                        <li><a href="#">Meito</a></li>
                                                        <li><a href="#">Walton</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="{{route('shop-left-sidebar')}}">Smartphone</a>
                                                    <ul>
                                                        <li><a href="#">Xail</a></li>
                                                        <li><a href="#">Sanai</a></li>
                                                        <li><a href="#">Meito</a></li>
                                                        <li><a href="#">Chamcham</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="right-menu"><a href="{{route('shop-left-sidebar')}}"><span><img src="assets/images/category-thumb/5.jpg" alt="Category-thumb"></span>Furnitured</a>
                                            <ul class="cat-mega-menu">
                                                <li class="right-menu cat-mega-title">
                                                    <a href="{{route('shop-left-sidebar')}}">bedroom</a>
                                                    <ul>
                                                        <li><a href="#">Bed</a></li>
                                                        <li><a href="#">lamp</a></li>
                                                        <li><a href="#">Mattress Sets</a></li>
                                                        <li><a href="#">Home Office</a></li>
                                                    </ul>
                                                </li>
                                                <li class="right-menu cat-mega-title">
                                                    <a href="{{route('shop-left-sidebar')}}">livingroom</a>
                                                    <ul>
                                                        <li><a href="#">chair</a></li>
                                                        <li><a href="#">table</a></li>
                                                        <li><a href="#">carpet</a></li>
                                                        <li><a href="#">Sofa</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span><img src="assets/images/category-thumb/6.jpg" alt="Category-thumb"></span>Video games</a></li>
                                        <li><a href="#"><span><img src="assets/images/category-thumb/7.jpg" alt="Category-thumb"></span>Sport & tourisim</a></li>
                                        <li><a href="#"><span><img src="assets/images/category-thumb/8.jpg" alt="Category-thumb"></span>Fruits & Veggies</a></li>
                                        <li><a href="#"><span><img src="assets/images/category-thumb/9.jpg" alt="Category-thumb"></span>Computer & Laptop</a></li>
                                        <li><a href="#"><span><img src="assets/images/category-thumb/10.jpg" alt="Category-thumb"></span>Meat & Seafood</a></li>
                                        <li class="rx-child"><a href="#"><span><img src="assets/images/category-thumb/11.jpg" alt="Category-thumb"></span>Accessories</a></li>
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
                                    <li class="dropdown-holder active">
                                        <a href="index.html">Home</a>
                                        <ul class="hb-dropdown">
                                            <li class="active"><a href="index.html"><i class="ion ion-ios-home"></i> Home Version 1</a></li>
                                            <li><a href="index-2.html"><i class="ion ion-ios-home"></i> Home Version 2</a></li>
                                            <li><a href="index-3.html"><i class="ion ion-ios-home"></i> Home Version 3</a></li>
                                            <li><a href="index-4.html"><i class="ion ion-ios-home"></i> Home Version 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-holder">
                                        <a href="{{route('shop-left-sidebar')}}">Shop</a>
                                        <ul class="hb-dropdown hb-dropdown-2">
                                            <li><a href="{{route('shop-left-sidebar')}}">Shop Layouts</a>
                                                <ul>
                                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                    <li><a href="{{route('shop-left-sidebar')}}">Shop Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="product-details.html">Product Details</a>
                                                <ul>
                                                    <li><a href="product-details.html">Product Details</a></li>
                                                    <li><a href="product-details-reverse.html">Product Details Reverse</a></li>
                                                    <li><a href="product-details-variable.html">Product Details Variable</a></li>
                                                    <li><a href="product-details-vertical.html">Product Details Vertical</a></li>
                                                    <li><a href="product-details-gallery.html">Product Details Gallery</a></li>
                                                    <li><a href="product-details-group.html">Product Details Group</a></li>
                                                    <li><a href="product-details-affiliate.html">Product Details Affiliate</a></li>
                                                    <li><a href="product-details-slider.html">Product Details Slider</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                        </ul>
                                    </li>
                                    <li class="megamenu-holder">
                                        <a href="#">Pages</a>
                                        <ul class="megamenu">
                                            <li><a href="{{route('shop-left-sidebar')}}">Shop</a>
                                                <ul>
                                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                    <li><a href="{{route('shop-left-sidebar')}}">Shop Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-right-sidebar.html">Product Details</a>
                                                <ul>
                                                    <li><a href="product-details.html">Product Details</a></li>
                                                    <li><a href="product-details-reverse.html">Product Details Reverse</a></li>
                                                    <li><a href="product-details-variable.html">Product Details Variable</a></li>
                                                    <li><a href="product-details-vertical.html">Product Details Vertical</a></li>
                                                    <li><a href="product-details-gallery.html">Product Details Gallery</a></li>
                                                    <li><a href="product-details-group.html">Product Details Group</a></li>
                                                    <li><a href="product-details-affiliate.html">Product Details Affiliate</a></li>
                                                    <li><a href="product-details-slider.html">Product Details Slider</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-right-sidebar.html">Other Pages</a>
                                                <ul>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="compare.html">Compare</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="login-register.html">Login Register</a></li>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="404.html">404 Error</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog-left-sidebar.html">Blog Pages</a>
                                                <ul>
                                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                    <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>
                                                    <li><a href="blog-audio-format.html">Blog Audio Format</a></li>
                                                    <li><a href="blog-video-format.html">Blog Video Format</a></li>
                                                    <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                                    <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-holder">
                                        <a href="blog-left-sidebar.html">Blog</a>
                                        <ul class="hb-dropdown">
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                            <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                            <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                            <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>
                                            <li><a href="blog-audio-format.html">Blog Audio Format</a></li>
                                            <li><a href="blog-video-format.html">Blog Video Format</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about-us.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="contact.html"> Contact</a>
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
        <!-- Begin Slider With Banner Area -->
        <div class="slider-with-banner pt-30">
            <div class="container">
                <div class="row">
                    <!-- Begin Slider Area -->
                    <div class="col-lg-9">
                        <div class="slider-area">
                            <div class="slider-active owl-carousel">
                                <!-- Begin Single Slide Area -->
                                <div class="single-slide align-center-left  animation-style-01 bg-1">
                                    <div class="slider-progress"></div>
                                    <div class="slider-content">
                                        <h2>Big Sale</h2>
                                        <h3>Up To 50% Off</h3>
                                        <h5>All Selected Items</h5>
                                        <div class="default-btn slide-btn">
                                            <a class="fb-links fb-links-round" href="{{route('shop-left-sidebar')}}">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Slide Area End Here -->
                                <!-- Begin Single Slide Area -->
                                <div class="single-slide align-center-left animation-style-02 bg-2">
                                    <div class="slider-progress"></div>
                                    <div class="slider-content">
                                        <h2>Win 1 Off 4</h2>
                                        <h3>Bakery Mixers</h3>
                                        <h5>Each Valued At $749.35</h5>
                                        <div class="default-btn slide-btn">
                                            <a class="fb-links fb-links-round" href="{{route('shop-left-sidebar')}}">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Slide Area End Here -->
                            </div>
                        </div>
                    </div>
                    <!-- Slider Area End Here -->
                    <div class="col-lg-3">
                        <div class="row">
                            <!-- Begin FB's Banner Area -->
                            <div class="col-lg-12 col-sm-6">
                                <div class="fb-banner fb-img-hover-effect pt-sm-30 pt-xs-30">
                                    <a href="#">
                                        <img src="assets/images/banner/1_1.jpg" alt="FB'S Banner">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="fb-banner fb-img-hover-effect pt-30">
                                    <a href="#">
                                        <img src="assets/images/banner/1_2.jpg" alt="FB'S Banner">
                                    </a>
                                </div>
                            </div>
                            <!-- FB's Banner Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider With Banner Area End Here -->
        <!-- Begin FB's customer Support Area -->
        <div class="fb-customer_support pb-55">
            <div class="container">
                <div class="row fb-customer_support-nav bg-white ml-0 mr-0 mt-30">
                    <div class="col-lg-4 col-md-4">
                        <ul class="customer-support_info pt-xs-30">
                            <li class="customer-support_text">
                                <i class="fa fa-clock-o"></i>
                                <span class="customer-support_date">Mon - Fri / 8:00 - 18:00</span>
                                <span class="customer-support_service">Working Days/Hours!</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <ul class="customer-support_info pt-xs-30">
                            <li class="customer-support_text">
                                <i class="fa fa-mobile"></i>
                                <span class="customer-support_date">888 345 6789</span>
                                <span class="customer-support_service">Free support line!</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <ul class="customer-support_info customer-support_info-3 pt-xs-30 pb-xs-30">
                            <li class="customer-support_text">
                                <i class="fa fa-envelope-o"></i>
                                <span class="customer-support_date">info@yourdomain.com</span>
                                <span class="customer-support_service">Orders Support!</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- FB's customer Support Area End Here -->
        <!-- Begin FB's Product With Banner Area -->
        <div class="fb-product_with_banner pb-60">
            <div class="container">
                <div class="fb-section_title">
                    <h2>Hot Deals</h2>
                </div>
                <div class="row no-gutters">
                    <!-- Begin FB's Banner Area -->
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="fb-banner fb-img-hover-effect">
                            <a href="#">
                                <img src="assets/images/banner/1_3.jpg" alt="FB'S Banner">
                            </a>
                        </div>
                    </div>
                    <!-- FB's Banner Area End Here -->
                    <!-- Begin FB's Product Wrap Area -->
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="fb-product_wrap bg-white">
                            <div class="fb-product_active owl-carousel">
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/1.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                        <div class="sticker-2"><span>-10%</span></div>
                                        <div class="countersection">
                                            <div class="fb-countdown"></div>
                                        </div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$46.91</span>
                                            <span class="old-price">$50.99</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/2_1.jpg" alt="FB'S Prduct">
                                            <img class="secondary-img" src="assets/images/product/2_2.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                        <div class="sticker-2"><span>-10%</span></div>
                                        <div class="countersection">
                                            <div class="fb-countdown"></div>
                                        </div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$46.91</span>
                                            <span class="old-price">$50.99</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/3_1.jpg" alt="FB'S Prduct">
                                            <img class="secondary-img" src="assets/images/product/3_2.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                        <div class="sticker-2"><span>-10%</span></div>
                                        <div class="countersection">
                                            <div class="fb-countdown"></div>
                                        </div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$46.91</span>
                                            <span class="old-price">$50.99</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/4_1.jpg" alt="FB'S Prduct">
                                            <img class="secondary-img" src="assets/images/product/4_2.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                        <div class="sticker-2"><span>-10%</span></div>
                                        <div class="countersection">
                                            <div class="fb-countdown"></div>
                                        </div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$46.91</span>
                                            <span class="old-price">$50.99</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/5_1.jpg" alt="FB'S Prduct">
                                            <img class="secondary-img" src="assets/images/product/5_2.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                        <div class="sticker-2"><span>-10%</span></div>
                                        <div class="countersection">
                                            <div class="fb-countdown"></div>
                                        </div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$46.91</span>
                                            <span class="old-price">$50.99</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                            </div>
                        </div>
                    </div>
                    <!-- FB's Product Wrap Area End Here -->
                </div>
            </div>
        </div>
        <!-- FB's Product Area End Here -->
        <!-- Begin FB's Banner Wrap Area -->
        <div class="fb-banner_wrap">
            <div class="container">
                <div class="row">
                    <!-- Begin FB's Banner Area -->
                    <div class="col-lg-6">
                        <div class="fb-banner fb-img-hover-effect pb-sm-30 pb-xs-30">
                            <a href="#">
                                <img src="assets/images/banner/1_4.jpg" alt="FB'S Banner">
                            </a>
                        </div>
                    </div>
                    <!-- FB's Banner Area End Here -->
                    <!-- Begin FB's Banner Area -->
                    <div class="col-lg-6">
                        <div class="fb-banner fb-img-hover-effect">
                            <a href="#">
                                <img src="assets/images/banner/1_5.jpg" alt="FB'S Banner">
                            </a>
                        </div>
                    </div>
                    <!-- FB's Banner Area End Here -->
                </div>
            </div>
        </div>
        <!-- FB's Banner Wrap Area End Here -->
        <!-- Begin FB's Banner With List Product Area -->
        <div class="fb-banner_with_list-product cookware-product pt-60 pb-60">
            <div class="container">
                <div class="fb-product_list_nav">
                    <div class="row no-gutters">
                        <div class="col-xl-3 col-lg-4 col-md-5">
                            <div class="fb-section_title-2">
                                <h2>Cookware</h2>
                            </div>
                            <!-- Begin FB's Banner Area -->
                            <div class="fb-banner fb-img-hover-effect">
                                <a href="#">
                                    <img src="assets/images/banner/1_6.jpg" alt="FB'S Banner">
                                </a>
                            </div>
                            <!-- FB's Banner Area End Here -->
                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-7">
                            <div class="btn-group">
                                <button class="subcategories-trigger"><i class="fa fa-bars"></i></button>
                                <ul class="subcategories-list">
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Cookware Brands</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Cookware Sets</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Individual Cookware</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Enamel Cookware</a></li>
                                </ul>
                                <!-- Begin FB's List Product Menu Area -->
                                <ul class="list-product_menu">
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Cookware Brands</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Cookware Sets</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Individual Cookware</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Enamel Cookware</a></li>
                                </ul>
                                <!-- FB's List Product Menu Area End Here -->
                            </div>
                            <!-- Begin FB's List Product Area -->
                            <div class="fb-list_product">
                                <div class="fb-list_product_active owl-carousel">
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/6_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/6_2.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/7_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/7_2.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/8_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/8_2.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/9.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/8_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/8_2.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/9.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/8_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/8_2.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/9.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                </div>
                            </div>
                            <!-- FB's List Product Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FB's Banner With List Product Area End Here -->
        <!-- Begin FB's Banner With List Product Area -->
        <div class="fb-banner_with_list-product large-appliances_product pb-60">
            <div class="container">
                <div class="fb-product_list_nav">
                    <div class="row no-gutters">
                        <div class="col-xl-3 col-lg-4 col-md-5">
                            <div class="fb-section_title-2">
                                <h2>Large Appliances</h2>
                            </div>
                            <!-- Begin FB's Banner Area -->
                            <div class="fb-banner fb-img-hover-effect">
                                <a href="#">
                                    <img src="assets/images/banner/1_7.jpg" alt="FB'S Banner">
                                </a>
                            </div>
                            <!-- FB's Banner Area End Here -->
                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-7">
                            <div class="btn-group">
                                <button class="subcategories-trigger"><i class="fa fa-bars"></i></button>
                                <ul class="subcategories-list">
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Armchairs</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Bunk Bed</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Mattress</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Sideboard</a></li>
                                </ul>
                                <!-- Begin FB's List Product Menu Area -->
                                <ul class="list-product_menu">
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Armchairs</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Bunk Bed</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Mattress</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Sideboard</a></li>
                                </ul>
                                <!-- FB's List Product Menu Area End Here -->
                            </div>
                            <!-- Begin FB's List Product Area -->
                            <div class="fb-list_product">
                                <div class="fb-list_product_active owl-carousel">
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/10.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/11.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/12_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/12_2.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/9.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/10.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/11.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/12_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/12_2.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/9.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                </div>
                            </div>
                            <!-- FB's List Product Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FB's Banner With List Product Area End Here -->
        <!-- Begin FB's Banner With List Product Area -->
        <div class="fb-banner_with_list-product small-appliances_product pb-60">
            <div class="container">
                <div class="fb-product_list_nav">
                    <div class="row no-gutters">
                        <div class="col-xl-3 col-lg-4 col-md-5">
                            <div class="fb-section_title-2">
                                <h2>Small Appliances</h2>
                            </div>
                            <!-- Begin FB's Banner Area -->
                            <div class="fb-banner fb-img-hover-effect">
                                <a href="#">
                                    <img src="assets/images/banner/1_8.jpg" alt="FB'S Banner">
                                </a>
                            </div>
                            <!-- FB's Banner Area End Here -->
                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-7">
                            <div class="btn-group">
                                <button class="subcategories-trigger"><i class="fa fa-bars"></i></button>
                                <ul class="subcategories-list">
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Bootees Bags</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Jackets</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Shelf</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Shoes</a></li>
                                </ul>
                                <!-- Begin FB's List Product Menu Area -->
                                <ul class="list-product_menu">
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Bootees Bags</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Jackets</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Shelf</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Shoes</a></li>
                                </ul>
                                <!-- FB's List Product Menu Area End Here -->
                            </div>
                            <!-- Begin FB's List Product Area -->
                            <div class="fb-list_product">
                                <div class="fb-list_product_active owl-carousel">
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/13.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/12_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/12_1.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/3_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/3_2.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/1.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/13.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/12_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/12_1.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/3_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/3_2.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/1.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                </div>
                            </div>
                            <!-- FB's List Product Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FB's Banner With List Product Area End Here -->
        <!-- Begin FB's Banner With List Product Area -->
        <div class="fb-banner_with_list-product drinkware_product pb-60">
            <div class="container">
                <div class="fb-product_list_nav">
                    <div class="row no-gutters">
                        <div class="col-xl-3 col-lg-4 col-md-5">
                            <div class="fb-section_title-2">
                                <h2>Drinkware</h2>
                            </div>
                            <!-- Begin FB's Banner Area -->
                            <div class="fb-banner fb-img-hover-effect">
                                <a href="#">
                                    <img src="assets/images/banner/1_9.jpg" alt="FB'S Banner">
                                </a>
                            </div>
                            <!-- FB's Banner Area End Here -->
                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-7">
                            <div class="btn-group">
                                <button class="subcategories-trigger"><i class="fa fa-bars"></i></button>
                                <ul class="subcategories-list">
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Tour Drinkware</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Hatch Drinkware</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Direction Drinkware</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Crescent Drinkware</a></li>
                                </ul>
                                <!-- Begin FB's List Product Menu Area -->
                                <ul class="list-product_menu">
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Tour Drinkware</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Hatch Drinkware</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Direction Drinkware</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}" target="_blank">Crescent Drinkware</a></li>
                                </ul>
                                <!-- FB's List Product Menu Area End Here -->
                            </div>
                            <!-- Begin FB's List Product Area -->
                            <div class="fb-list_product">
                                <div class="fb-list_product_active owl-carousel">
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/13.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/12_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/12_1.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/3_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/3_2.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/1.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/13.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/12_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/12_1.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                    <div class="row no-gutters">
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/3_1.jpg" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="assets/images/product/3_2.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                        <!-- Begin Sigle Product Area -->
                                        <div class="single-product list-single_product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img list-product_img">
                                                <a href="product-details.html">
                                                    <img class="primary-img" src="assets/images/product/1.jpg" alt="FB'S Prduct">
                                                </a>
                                                <div class="sticker"><span>New</span></div>
                                            </div>
                                            <!-- Product Image Area End Here -->
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content list-product_content">
                                                <h2 class="product-name">
                                                    <a href="single-product">Printed Dress</a>
                                                </h2>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">$46.91</span>
                                                </div>
                                                <div class="product-action list-product_action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                        <!-- Sigle Product Area End Here -->
                                    </div>
                                </div>
                            </div>
                            <!-- FB's List Product Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FB's Banner With List Product Area End Here -->
        <!-- Begin FB's Banner With New Product Area -->
        <div class="fb-banner_with-new_product pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="fb-section_title fb-section_title-3">
                            <h2>New products </h2>
                        </div>
                        <!-- Begin FB's Banner Area -->
                        <div class="fb-banner fb-img-hover-effect">
                            <a href="#">
                                <img src="assets/images/banner/1_10.jpg" alt="FB'S Banner">
                            </a>
                        </div>
                        <!-- FB's Banner Area End Here -->
                        <div class="fb-product_wrap fb-new_product_wrap bg-white">
                            <div class="fb-new_product_active owl-carousel">
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/7_1.jpg" alt="FB'S Prduct">
                                            <img class="secondary-img" src="assets/images/product/7_2.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$30.50</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/10.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$30.50</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/7_1.jpg" alt="FB'S Prduct">
                                            <img class="secondary-img" src="assets/images/product/7_2.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$30.50</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/10.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$30.50</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fb-section_title fb-section_title-4 pt-sm-60 pt-xs-60">
                            <h2>Featured products </h2>
                        </div>
                        <!-- Begin FB's Banner Area -->
                        <div class="fb-banner fb-img-hover-effect">
                            <a href="#">
                                <img src="assets/images/banner/1_11.jpg" alt="FB'S Banner">
                            </a>
                        </div>
                        <!-- FB's Banner Area End Here -->
                        <div class="fb-product_wrap fb-new_product_wrap bg-white">
                            <div class="fb-new_product_active owl-carousel">
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/4_1.jpg" alt="FB'S Prduct">
                                            <img class="secondary-img" src="assets/images/product/4_2.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$30.50</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/6_1.jpg" alt="FB'S Prduct">
                                            <img class="secondary-img" src="assets/images/product/6_2.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$30.50</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/7_1.jpg" alt="FB'S Prduct">
                                            <img class="secondary-img" src="assets/images/product/7_2.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                                <li class="no-star"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$30.50</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="primary-img" src="assets/images/product/10.jpg" alt="FB'S Prduct">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">Printed Dress</a>
                                        </h2>
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$30.50</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="shopping-cart.html" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="product-details.html" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                <!-- Sigle Product Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FB's Banner With New Product Area End Here -->
        <!-- Begin FB's Branding Area -->
        <div class="fb-branding-wrap pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="fb-branding bg-white">
                            <div class="fb-branding_active owl-carousel">
                                <div class="branding-item">
                                    <a href="#">
                                        <img src="{{route('assets/images/branding/1.jpg')}}" alt="FB's Branding">
                                    </a>
                                </div>
                                <div class="branding-item">
                                    <a href="#">
                                        <img src="{{route('assets/images/branding/2.jpg')}}" alt="FB's Branding">
                                    </a>
                                </div>
                                <div class="branding-item">
                                    <a href="#">
                                        <img src="{{route('assets/images/branding/3.jpg')}}" alt="FB's Branding">
                                    </a>
                                </div>
                                <div class="branding-item">
                                    <a href="#">
                                        <img src="{{route('assets/images/branding/4.jpg')}}" alt="FB's Branding">
                                    </a>
                                </div>
                                <div class="branding-item">
                                    <a href="#">
                                        <img src="{{route('assets/images/branding/5.jpg')}}" alt="FB's Branding">
                                    </a>
                                </div>
                                <div class="branding-item">
                                    <a href="#">
                                        <img src="{{route('assets/images/branding/6.jpg')}}" alt="FB's Branding">
                                    </a>
                                </div>
                                <div class="branding-item">
                                    <a href="#">
                                        <img src="{{route('assets/images/branding/1.jpg')}}" alt="FB's Branding">
                                    </a>
                                </div>
                                <div class="branding-item">
                                    <a href="#">
                                        <img src="{{route('assets/images/branding/2.jpg')}}" alt="FB's Branding">
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
                                        <img src="{{route('assets/images/menu/logo/2.png')}}" alt="FB's Logo">
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
                                        <img src="{{route('assets/images/payment/1.png')}}" alt="FB's Footer Payment">
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
                                <span>Copyright &copy; 2018 <a href="#">Fastbuy.</a> All rights reserved.</span>
                            </div>
                        </div>
                        <!-- Copyright Area End Here -->
                        <!-- Begin Footer Bottom Menu Area -->
                        <div class="col-lg-6 col-md-6">
                            <div class="fotter-bottom_menu">
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('about-us')}}">About</a></li>
                                    <li><a href="{{route('shop-left-sidebar')}}">Shop</a></li>
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
        <!-- Begin Fb's Quick View | Modal Area -->
        <div class="modal fade modal-wrapper" id="exampleModalCenter" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body pt-15 pb-10 pt-sm-10 pb-sm-30 pb-xs-50">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-inner-area row">
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <!-- Product Details Left -->
                                <div class="product-details-left">
                                    <div class="product-details-images slider-navigation-1">
                                        <div class="lg-image">
                                            <img src="{{route('assets/images/single-product/large-size/1.jpg')}}" alt="Single Product Image">
                                        </div>
                                        <div class="lg-image">
                                            <img src="{{route('assets/images/single-product/large-size/2.jpg')}}" alt="Single Product Image">
                                        </div>
                                        <div class="lg-image">
                                            <img src="{{route('assets/images/single-product/large-size/3.jpg')}}" alt="Single Product Image">
                                        </div>
                                        <div class="lg-image">
                                            <img src="{{route('assets/images/single-product/large-size/4.jpg')}}" alt="Single Product Image">
                                        </div>
                                    </div>
                                    <div class="product-details-thumbs">
                                        <div class="sm-image"><img src="{{asset('assets/images/single-product/small-size/1.jpg')}}" alt="Single Product Thumb">
                                        </div>
                                        <div class="sm-image"><img src="{{asset('assets/images/single-product/small-size/2.jpg')}}" alt="Single Product Thumb">
                                        </div>
                                        <div class="sm-image"><img src="{{asset('assets/images/single-product/small-size/3.jpg')}}" alt="Single Product Thumb">
                                        </div>
                                        <div class="sm-image"><img src="{{asset('assets/images/single-product/small-size/4.jpg')}}" alt="Single Product Thumb">
                                        </div>
                                    </div>
                                </div>
                                <!--// Product Details Left -->
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="product-details-view-content pt-40 pt-sm-25">
                                    <div class="product-info">
                                        <h2>Printed Dress</h2>
                                        <div class="price-box pb-20">
                                            <span class="new-price new-price-2">$57.98</span>
                                            <span class="old-price">$57.98</span>
                                        </div>
                                        <div class="sticker-2">Save 8%</div>
                                        <div class="product-desc">
                                            <p>
                                                    <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom.
                                                    </span>
                                            </p>
                                        </div>
                                        <div class="product-variants">
                                            <div class="produt-variants-size">
                                                <label>Dimension</label>
                                                <select class="nice-select">
                                                    <option value="1" title="S" selected="selected">S</option>
                                                    <option value="2" title="M">M</option>
                                                    <option value="3" title="L">L</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-add-to-cart">
                                            <form action="#" class="cart-quantity">
                                                <div class="quantity">
                                                    <label>Quantity</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="1" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </div>
                                                <button class="fb-btn" type="submit">Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="footer-widget-social-link modal-social-link">
                                        <span>Share: </span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fb's Quick View | Modal Area End Here -->
    </div>
    <!-- Body Wraper Area End Here -->

@endsection
