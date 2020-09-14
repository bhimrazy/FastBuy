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
                            <li class="active">Search Results</li>
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
                <div class="col-lg-12">
                    <!-- Begin FB's Banner Area -->
                    <div class="shop-top-bar">
                        <h2>Search Results:{{$query??''}}</h2>
                    </div>
                    <!-- FB's Banner Area End Here -->
                    <!-- shop-top-bar start -->
                    <div class="shop-top-bar mt-25">
                        <div class="shop-bar-inner">
                            <div class="product-view-mode">
                                <!-- shop-item-filter-list start -->
                                <ul class="nav shop-item-filter-list" role="tablist">
                                    <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                </ul>
                                <!-- shop-item-filter-list end -->
                            </div>
                            <div class="toolbar-amount">
                                <span>There are {{count($products)}} products.</span>
                            </div>
                        </div>
                        <!-- product-select-box start -->
                        <div class="product-select-box">
                            <div class="product-short">
                                <p>Search: {{$query   ??''}}  </p>
                                </div>
                        </div>
                        <!-- product-select-box end -->
                    </div>
                    <!-- shop-top-bar end -->
                    <!-- shop-products-wrapper start -->
                    @if(count($products)>0)
                        <div class="shop-products-wrapper bg-white mt-30 pb-60 pb-sm-30">
                            <div class="tab-content">
                                <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                    <div class="fb-product_wrap shop-product-area">
                                        <div class="row">
                                            @foreach($products as $product)
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <!-- Begin Sigle Product Area -->
                                                    <div class="single-product">
                                                        <!-- Begin Product Image Area -->
                                                        <div class="product-img">
                                                            <a href="{{route('product.productShow',['product'=>$product->slug])}}">
                                                                <img class="primary-img" src="{{asset($product->media[0]->url)}}" alt="{{$product->name}}">
                                                                <img class="secondary-img" src="{{asset($product->media[1]->url)}}" alt="{{$product->name}}">
                                                            </a>
                                                            <div class="sticker"><span>New</span></div>
                                                            <div class="sticker-2"><span>-10%</span></div>
                                                        </div>
                                                        <!-- Product Image Area End Here -->
                                                        <!-- Begin Product Content Area -->
                                                        <div class="product-content">
                                                            <h2 class="product-name">
                                                                <a href="{{route('product.productShow',['product'=>$product->slug])}}">{{$product->name}}</a>
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
                                                                <span class="new-price">${{$product->price-$product->discount*0.01*$product->price}}</span>
                                                                <span class="old-price">${{$product->price}}</span>
                                                            </div>
                                                            <div class="product-action">
                                                                <ul class="product-action-link">
                                                                    <li class="shopping-cart_link"><a href="" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                                    <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                                    <li class="single-product_link"><a href="" title="Single Product"><i class="ion-link"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content Area End Here -->
                                                    </div>
                                                    <!-- Sigle Product Area End Here -->
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="paginatoin-area paginatoin-column-view">
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
                    @else
                        <p>No Results Found</p>
                    @endif
                    <!-- shop-products-wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wraper Area End Here -->
@endsection
