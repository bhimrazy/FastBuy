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
                            <li class="active">Shop Left Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Li's Content Wraper Area -->
    <div class="content-wraper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-1 order-lg-2">
                    <!-- Begin FB's Banner Area -->
                    <div class="shoptopbar-heading">
                        <h2>Electronics</h2>
                    </div>
                    <!-- Li's Banner Area End Here -->
                    <!-- shop-top-bar start -->
                    <div class="shop-top-bar mt-25">
                        <div class="shop-bar-inner">
                            <div class="product-view-mode">
                                <!-- shop-item-filter-list start -->
                                <ul class="nav shop-item-filter-list" role="tablist">
                                    <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                                <!-- shop-item-filter-list end -->
                            </div>
                            <div class="toolbar-amount">
                                <span>There are 13 products.</span>
                            </div>
                        </div>
                        <!-- product-select-box start -->
                        <div class="product-select-box">
                            <div class="product-short">
                                <p>Sort By:</p>
                                <select class="nice-select">
                                    <option value="trending">Relevance</option>
                                    <option value="sales">Name (A - Z)</option>
                                    <option value="sales">Name (Z - A)</option>
                                    <option value="rating">Price (Low &gt; High)</option>
                                    <option value="date">Rating (Lowest)</option>
                                    <option value="price-asc">Model (A - Z)</option>
                                    <option value="price-asc">Model (Z - A)</option>
                                </select>
                            </div>
                        </div>
                        <!-- product-select-box end -->
                    </div>
                    <!-- shop-top-bar end -->
                    <!-- shop-products-wrapper start -->
                    <div class="shop-products-wrapper bg-white mt-30 pb-60 pb-sm-30">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                <div class="fb-product_wrap shop-product-area">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-content">
                                                    <h2 class="product-name">
                                                        <a href="{{route('product-details')}}">Faded Short Sleeves T-shirt</a>
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
                                                        <span class="new-price">$15.19</span>
                                                        <span class="old-price">$16.51</span>
                                                    </div>
                                                    <div class="product-action">
                                                        <ul class="product-action-link">
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                                                        <a href="{{route('product-details')}}">Printed Summer Dress</a>
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
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/8_1.jpg')}}" alt="FB'S Prduct">
                                                        <img class="secondary-img" src="{{asset('assets/images/product/8_2.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-content">
                                                    <h2 class="product-name">
                                                        <a href="{{route('product-details')}}">Printed Summer Dress</a>
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
                                                        <span class="new-price">$30.50</span>
                                                    </div>
                                                    <div class="product-action">
                                                        <ul class="product-action-link">
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/9.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-content">
                                                    <h2 class="product-name">
                                                        <a href="{{route('product-details')}}">Blouse</a>
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
                                                        <span class="new-price">$26.99</span>
                                                    </div>
                                                    <div class="product-action">
                                                        <ul class="product-action-link">
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/1.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-content">
                                                    <h2 class="product-name">
                                                        <a href="{{route('product-details')}}">Printed Dress</a>
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
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/11.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-content">
                                                    <h2 class="product-name">
                                                        <a href="{{route('product-details')}}">Printed Dress</a>
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
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                                                        <a href="{{route('product-details')}}">Printed Summer Dress</a>
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
                                                        <span class="new-price">$23.39</span>
                                                        <span class="old-price">$25.99</span>
                                                    </div>
                                                    <div class="product-action">
                                                        <ul class="product-action-link">
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/3_1.jpg')}}" alt="FB'S Prduct">
                                                        <img class="secondary-img" src="{{asset('assets/images/product/3_2.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-content">
                                                    <h2 class="product-name">
                                                        <a href="{{route('product-details')}}">Printed Chiffon Dress</a>
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
                                                        <span class="new-price">$50.99</span>
                                                    </div>
                                                    <div class="product-action">
                                                        <ul class="product-action-link">
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                                                        <a href="{{route('product-details')}}">Printed Dress</a>
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
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                    <div class="product-action">
                                                        <ul class="product-action-link">
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/9.jpg')}}" alt="FB'S Prduct">
                                                        <img class="secondary-img" src="{{asset('assets/images/product/11.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-content">
                                                    <h2 class="product-name">
                                                        <a href="{{route('product-details')}}">Printed Dress</a>
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
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-content">
                                                    <h2 class="product-name">
                                                        <a href="{{route('product-details')}}">Printed Dress</a>
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
                                                        <span class="new-price">$20.50</span>
                                                    </div>
                                                    <div class="product-action">
                                                        <ul class="product-action-link">
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/13.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-content">
                                                    <h2 class="product-name">
                                                        <a href="{{route('product-details')}}">Printed Dress</a>
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
                                                        <span class="new-price">$45.50</span>
                                                        <span class="old-price">$50.99</span>
                                                    </div>
                                                    <div class="product-action">
                                                        <ul class="product-action-link">
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                                                        <a href="{{route('product-details')}}">Printed Dress</a>
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
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-content">
                                                    <h2 class="product-name">
                                                        <a href="{{route('product-details')}}">Printed Dress</a>
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
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                            <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                            <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Content Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/13.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                                <!-- Begin Product Content Area -->
                                                <div class="product-content">
                                                    <h2 class="product-name">
                                                        <a href="{{route('product-details')}}">Printed Dress</a>
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
                                                            <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
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
                            <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                                <div class="fb-product_wrap shop-product-area">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                                                </div>
                                                <!-- Product Image Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content product-content-list_view">
                                                <h2 class="product-name">
                                                    <a href="{{route('product-details')}}">Faded Short Sleeves T-shirt</a>
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
                                                    <span class="new-price">$15.19</span>
                                                    <span class="old-price">$16.51</span>
                                                </div>
                                                <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                <div class="product-action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
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
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content product-content-list_view">
                                                <h2 class="product-name">
                                                    <a href="{{route('product-details')}}">Printed Summer Dress</a>
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
                                                <p>Sleeveless knee-length chiffon dress. V-neckline with elastic under the bust lining.</p>
                                                <div class="product-action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/8_1.jpg')}}" alt="FB'S Prduct">
                                                        <img class="secondary-img" src="{{asset('assets/images/product/8_2.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content product-content-list_view">
                                                <h2 class="product-name">
                                                    <a href="{{route('product-details')}}">Faded Short Sleeves T-shirt</a>
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
                                                <p>Sleeveless knee-length chiffon dress. V-neckline with elastic under the bust lining.</p>
                                                <div class="product-action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/9.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content product-content-list_view">
                                                <h2 class="product-name">
                                                    <a href="{{route('product-details')}}">Printed Summer Dress</a>
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
                                                    <span class="new-price">$26.99</span>
                                                </div>
                                                <p>Sleeveless knee-length chiffon dress. V-neckline with elastic under the bust lining.</p>
                                                <div class="product-action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/1.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                    <div class="sticker-2"><span>-10%</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content product-content-list_view">
                                                <h2 class="product-name">
                                                    <a href="{{route('product-details')}}">Faded Short Sleeves T-shirt</a>
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
                                                    <span class="new-price">$23.39</span>
                                                    <span class="old-price">$25.99</span>
                                                </div>
                                                <p>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom.</p>
                                                <div class="product-action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/11.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content product-content-list_view">
                                                <h2 class="product-name">
                                                    <a href="{{route('product-details')}}">Faded Short Sleeves T-shirt</a>
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
                                                    <span class="new-price">$50.99</span>
                                                </div>
                                                <p>Printed evening dress with straight sleeves with black thin waist belt and ruffled linings.</p>
                                                <div class="product-action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- Begin Sigle Product Area -->
                                            <div class="single-product">
                                                <!-- Begin Product Image Area -->
                                                <div class="product-img">
                                                    <a href="{{route('product-details')}}">
                                                        <img class="primary-img" src="{{asset('assets/images/product/7_2.jpg')}}" alt="FB'S Prduct">
                                                        <img class="secondary-img" src="{{asset('assets/images/product/7_1.jpg')}}" alt="FB'S Prduct">
                                                    </a>
                                                    <div class="sticker"><span>New</span></div>
                                                </div>
                                                <!-- Product Image Area End Here -->
                                            </div>
                                            <!-- Sigle Product Area End Here -->
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6">
                                            <!-- Begin Product Content Area -->
                                            <div class="product-content product-content-list_view">
                                                <h2 class="product-name">
                                                    <a href="{{route('product-details')}}">Printed Summer Dress</a>
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
                                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                                                <div class="product-action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="{{route('cart')}}" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product-details')}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <p>Showing 1-12 of 13 item(s)</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul class="pagination-box pt-xs-20 pb-xs-15">
                                            <li><a href="#" class="Previous"><i class="ion-chevron-left"></i> Previous</a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>
                                                <a href="#" class="Next"> Next <i class="ion-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-products-wrapper end -->
                </div>
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="sidebar-title">
                        <h2>Electronics</h2>
                    </div>
                    <!--Begin Sidebar Categores Box Area -->
                    <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                        <!-- Begin Category Sub Menu Area -->
                        <div class="category-sub-menu">
                            <ul>
                                <li class="has-sub"><a href="# ">Cameras</a>
                                    <ul>
                                        <li><a href="#">Cords and Cables</a></li>
                                        <li><a href="#">gps accessories</a></li>
                                        <li><a href="#">Microphones</a></li>
                                        <li><a href="#">Wireless Transmitters</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#">GamePad</a>
                                    <ul>
                                        <li><a href="#">cube lifestyle hd</a></li>
                                        <li><a href="#">gopro hero4</a></li>
                                        <li><a href="#">handycam cx405</a></li>
                                        <li><a href="#">vixia hf r600</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#">Digital Cameras</a>
                                    <ul>
                                        <li><a href="#">Gold eye</a></li>
                                        <li><a href="#">Questek</a></li>
                                        <li><a href="#">Snm</a></li>
                                        <li><a href="#">Vantech</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#">Virtual Reality</a>
                                    <ul>
                                        <li><a href="#">Samsung</a></li>
                                        <li><a href="#">Toshiba</a></li>
                                        <li><a href="#">Transcend</a></li>
                                        <li><a href="#">Sandisk</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Category Sub Menu Area End Here -->
                    </div>
                    <!--Sidebar Categores Box Area End Here -->
                    <!--Begin Sidebar Categores Box Area -->
                    <div class="sidebar-categores-box search-filter mt-sm-25 mt-xs-30">
                        <div class="sidebar-title">
                            <h2>Filter By</h2>
                        </div>
                        <!-- btn-clear-all start -->
                        <button class="btn-clear-all">Clear all</button>
                        <!-- btn-clear-all end -->
                    </div>
                    <!--Sidebar Categores Box Area End Here -->
                    <!--Begin Sidebar Categores Box Area -->
                    <div class="sidebar-title-2">
                        <h2>Categories</h2>
                    </div>
                    <div class="sidebar-categores-box sidebar-categores_list mt-sm-25 mt-xs-25">
                        <div class="sidebar-categores-checkbox">
                            <form action="#">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked="" name="product-categories">
                                        <a href="#">Cameras (13)</a>
                                    </li>
                                    <li><input type="checkbox" name="product-categories">
                                        <a href="#"> GamePad (13)</a>
                                    </li>
                                    <li><input type="checkbox" name="product-categories">
                                        <a href="#">Digital Cameras (13)</a>
                                    </li>
                                    <li><input type="checkbox" name="product-categories">
                                        <a href="#"> Virtual Reality (13) </a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!--Sidebar Categores Box Area End Here -->
                    <!--Begin Sidebar Categores Box Area -->
                    <div class="sidebar-title-2">
                        <h2>Price</h2>
                    </div>
                    <div class="sidebar-categores-box sidebar-categores_list mt-sm-25 mt-xs-25">
                        <div class="sidebar-categores-checkbox">
                            <form action="#">
                                <ul>
                                    <li><input type="radio" name="product-categories" checked=""><a href="#">$15.00 - $17.00 (2)</a></li>
                                    <li><input type="radio" name="product-categories"><a href="#">$20.00 - $21.00 (1)</a></li>
                                    <li><input type="radio" name="product-categories"><a href="#">$22.00 - $24.00 (2)</a></li>
                                    <li><input type="radio" name="product-categories"><a href="#">$25.00 - $28.00 (2)</a></li>
                                    <li><input type="radio" name="product-categories"><a href="#">$30.00 - $32.00 (4)</a></li>
                                    <li><input type="radio" name="product-categories"><a href="#">$46.00 - $49.00 (1)</a></li>
                                    <li><input type="radio" name="product-categories"><a href="#">$50.00 - $53.00 (1)</a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!--Sidebar Categores Box Area End Here -->
                    <!--Begin Sidebar Categores Box Area -->
                    <div class="sidebar-title-2">
                        <h2>Compositions</h2>
                    </div>
                    <div class="sidebar-categores-box sidebar-categores_list mt-sm-25 mt-xs-25">
                        <div class="sidebar-categores-checkbox">
                            <form action="#">
                                <ul>
                                    <li><input type="checkbox" checked="" name="product-categori"><a href="#">Cotton (5)</a></li>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Polyester (4)</a></li>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Viscose (4)</a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!--Sidebar Categores Box Area End Here -->
                    <!--Begin Sidebar Categores Box Area -->
                    <div class="sidebar-title-2">
                        <h2>Styles</h2>
                    </div>
                    <div class="sidebar-categores-box sidebar-categores_list mt-sm-25 mt-xs-25">
                        <div class="sidebar-categores-checkbox">
                            <form action="#">
                                <ul>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Casual (4)</a></li>
                                    <li><input type="checkbox" checked="" name="product-categori"><a href="#">Dressy (2)</a></li>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Girly (7)</a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!--Sidebar Categores Box Area End Here -->
                    <!--Begin Sidebar Categores Box Area -->
                    <div class="sidebar-title-2">
                        <h2>Properties</h2>
                    </div>
                    <div class="sidebar-categores-box sidebar-categores_list mt-sm-25 mt-xs-25">
                        <div class="sidebar-categores-checkbox">
                            <form action="#">
                                <ul>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Colorful Dress (3)</a></li>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Maxi Dress (2)</a></li>
                                    <li><input type="checkbox" checked="" name="product-categori"><a href="#">Short Dress (4)</a></li>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Short Sleeve (2) </a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!--Sidebar Categores Box Area End Here -->
                    <!--Begin Sidebar Categores Box Area -->
                    <div class="sidebar-categores-img fb-img-hover-effect pt-5 mt-sm-25 mt-xs-25">
                        <a href="#">
                            <img src="{{asset('assets/images/banner/1_6.jpg')}}" alt="FB'S Banner">
                        </a>
                    </div>
                    <!--Sidebar Categores Box Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wraper Area End Here -->
@endsection
