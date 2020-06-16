@extends('client.layouts.client')
@section('body')

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
                                        <img src="{{asset('assets/images/banner/1_1.jpg')}}" alt="FB'S Banner">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6">
                                <div class="fb-banner fb-img-hover-effect pt-30">
                                    <a href="#">
                                        <img src="{{asset('assets/images/banner/1_2.jpg')}}" alt="FB'S Banner">
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
                                <img src="{{asset('assets/images/banner/1_3.jpg')}}" alt="FB'S Banner">
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/1.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/2_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/2_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/3_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/3_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/4_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/4_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/5_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/5_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
        <div class="fb-product_with_banner pb-60">
            <div class="container">
                <div class="fb-section_title">
                    <h2>Hot DB Product Deals</h2>
                </div>
                <div class="row no-gutters">
                    <!-- Begin FB's Banner Area -->
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="fb-banner fb-img-hover-effect">
                            <a href="#">
                                <img src="{{asset('assets/images/banner/1_3.jpg')}}" alt="FB'S Banner">
                            </a>
                        </div>
                    </div>
                    <!-- FB's Banner Area End Here -->
                    <!-- Begin FB's Product Wrap Area -->
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="fb-product_wrap bg-white">
                            <div class="fb-product_active owl-carousel">
                                <!-- Begin Sigle Product Area -->
                                @if($products)
                                @foreach($products as $product)
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-img" src="{{asset($product->media->first()->url)}}" alt="FB'S Product">
                                        </a>
                                        <div class="sticker"><span>New</span></div>
                                        <div class="sticker-2"><span>-{{$product->discount}}%</span></div>
                                        <div class="countersection">
                                            <div class="fb-countdown"></div>
                                        </div>
                                    </div>
                                    <!-- Product Image Area End Here -->
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="single-product">{{$product->title}}</a>
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
                                            <span class="new-price">${{$product->price - ($product->discount /100 * $product->price)}}</span>
                                            <span class="old-price">${{$product->price}}</span>
                                        </div>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a href="#" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product.show',['product'=>$product->slug])}}" title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                                @endforeach
                                @endif
                                <!-- Begin Sigle Product Area -->
                                <div class="single-product">
                                    <!-- Begin Product Image Area -->
                                    <div class="product-img">
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/1.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/2_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/2_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/3_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/3_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/4_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/4_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/5_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/5_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                <img src="{{asset('assets/images/banner/1_4.jpg')}}" alt="FB'S Banner">
                            </a>
                        </div>
                    </div>
                    <!-- FB's Banner Area End Here -->
                    <!-- Begin FB's Banner Area -->
                    <div class="col-lg-6">
                        <div class="fb-banner fb-img-hover-effect">
                            <a href="#">
                                <img src="{{asset('assets/images/banner/1_5.jpg')}}" alt="FB'S Banner">
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
                                    <img src="{{asset('assets/images/banner/1_6.jpg')}}" alt="FB'S Banner">
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/6_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/6_2.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/7_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/7_2.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/8_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/8_2.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/9.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/8_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/8_2.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/9.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/8_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/8_2.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/9.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                    <img src="{{asset('assets/images/banner/1_7.jpg')}}" alt="FB'S Banner">
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/10.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/11.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/12_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/12_2.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/9.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/10.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/11.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/12_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/12_2.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/9.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                    <img src="{{asset('assets/images/banner/1_8.jpg')}}" alt="FB'S Banner">
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/13.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/12_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/12_1.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/3_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/3_2.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/1.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/13.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/12_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/12_1.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/3_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/3_2.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/1.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                    <img src="{{asset('assets/images/banner/1_9.jpg')}}" alt="FB'S Banner">
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/13.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/12_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/12_1.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/3_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/3_2.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/1.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/13.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/12_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/12_1.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/3_1.jpg')}}" alt="FB'S Prduct">
                                                    <img class="secondary-img" src="{{asset('assets/images/product/3_2.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                                <a href="{{route('product-details')}}">
                                                    <img class="primary-img" src="{{asset('assets/images/product/1.jpg')}}" alt="FB'S Prduct">
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
                                                        <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/7_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/7_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/10.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/7_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/7_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/10.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/4_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/4_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/6_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/6_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="shopping-cart_link"><a href="{{route('carts.index')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/7_1.jpg')}}" alt="FB'S Prduct">
                                            <img class="secondary-img" src="{{asset('assets/images/product/7_2.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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
                                        <a href="{{route('product-details')}}">
                                            <img class="primary-img" src="{{asset('assets/images/product/10.jpg')}}" alt="FB'S Prduct">
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
                                                <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
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


@endsection
