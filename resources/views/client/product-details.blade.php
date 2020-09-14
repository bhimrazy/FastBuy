@extends('client.layouts.client')
@section('body')
    <!-- Begin FB's Breadcrumb Area -->
    <div class="breadcrumb-area pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Product Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FB's Breadcrumb Area End Here -->
    <!-- Begin FB's Page Content Area -->
    <div class="page-content">
        <!-- Product Details Area -->
        <div class="product-details-area">
            <div class="container">
                <form role="form" action="{{route('carts.store')}}" method="POST">
                    @csrf
                    <input name="product_id" value="{{$product->id}}" hidden>
                    <div class="pdetails bg-white">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="pdetails-images">
                                    <div class="pdetails-largeimages pdetails-imagezoom">
                                        <div class="pdetails-singleimage" data-src="{{asset($product->media->first()->url)}}">
                                            <img src="{{asset($product->media->first()->url)}}" title="{{$product->name}}" alt="{{$product->name}}">
                                            <div class="sticker">New</div>
                                        </div>
                                        @foreach($product->media as $key => $image)
                                            @if($key>0)
                                                <div class="pdetails-singleimage" data-src="{{asset($image->url)}}">
                                                    <img src="{{asset($image->url)}}" title="{{$product->name}}" alt="{{$product->name}}">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <div class="pdetails-thumbs">
                                        @foreach($product->media as $image)
                                            <div class="pdetails-singlethumb" data-src="{{asset($image->url)}}">
                                                <img src="{{asset($image->url)}}" title="{{$product->name}}" alt="{{$product->name}}">
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-view-content mt-20">
                                    <div class="product-info">
                                        <h2>{{$product->name}}</h2>
                                        <span class="product-details-ref">Reference: {{$product->sku}}</span>
                                        <div class="rating-box pt-10">
                                            <ul class="rating-with-review-item">
                                                <li class="review-item"><a href="#">Write Review</a></li>
                                            </ul>
                                        </div>
                                        <div class="price-box pb-10">
                                            <span class="new-price">{{config('settings.currency_symbol')}}{{$product->price}}</span>
                                        </div>
                                        <div class="product-desc">
                                            <p>
                                                <span>{{$product->description}}</span>
                                            </p>
                                        </div>
                                        <div class="single-add-to-cart">
                                            <form action="#" class="cart-quantity mt-0">
                                                <div class="quantity">
                                                    <label>Quantity</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" name="quantity" value="1" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="fb-btn add-to-cart">Add to cart</button>
                                            </form>
                                        </div>
                                        <span class="product-availability pt-25">In stock</span>
                                        <div class="footer-widget-social-link footer-widget-social-link-2">
                                            <span>Share</span>
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
                                        <div class="block-reassurance">
                                            <ul>
                                                <li>
                                                    <div class="reassurance-item">
                                                        <div class="reassurance-icon">
                                                            <i class="fa fa-check-square-o"></i>
                                                        </div>
                                                        <p>Security policy (edit with Customer reassurance module)</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="reassurance-item">
                                                        <div class="reassurance-icon">
                                                            <i class="fa fa-truck"></i>
                                                        </div>
                                                        <p>Delivery policy (edit with Customer reassurance module)</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="reassurance-item">
                                                        <div class="reassurance-icon">
                                                            <i class="fa fa-exchange"></i>
                                                        </div>
                                                        <p> Return policy (edit with Customer reassurance module)</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Product Details Area End Here -->
        <!-- Begin Product Area -->
        <div class="product-area pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="fb-product-tab">
                            <ul class="nav fb-product-menu">
                                <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a></li>
                                <li><a data-toggle="tab" href="#product-details"><span>Product Details</span></a></li>
                                <li><a data-toggle="tab" href="#reviews"><span>Reviews</span></a></li>
                            </ul>
                        </div>
                        <!-- Begin FB's Tab Menu Content Area -->
                    </div>
                </div>
                <div class="tab-content">
                    <div id="description" class="tab-pane active show" role="tabpanel">
                        <div class="product-description">
                            <span>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</span>
                        </div>
                    </div>
                    <div id="product-details" class="tab-pane" role="tabpanel">
                        <div class="product-details-manufacturer">
                            <a href="#">
                                <img src="{{asset('assets/images/product-details/manufacturer.jpg')}}" alt="Product Details Manufacturer Image">
                            </a>
                            <p><span>Reference</span> demo_7</p>
                            <p class="in-stock"><span>in Stock</span> 298 Items</p>
                            <div class="pdetails-features pt-10">
                                <h3>Data sheet</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="data-sheet">
                                            <li class="name">Compositions</li>
                                            <li class="name">Styles</li>
                                            <li class="name">Properties</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="data-sheet">
                                            <li class="name">Polyester</li>
                                            <li class="name">Girly</li>
                                            <li class="name">Short Dress</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="reviews" class="tab-pane" role="tabpanel">
                        <div class="product-reviews">
                            <div class="product-details-comment-block">
                                <div class="review-btn">
                                    <a class="review-links" href="#" data-toggle="modal" data-target="#mymodal">Be the first to write your review !</a>
                                </div>
                                <!-- Begin Quick View | Modal Area -->
                                <div class="modal fade modal-wrapper" id="mymodal" >
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h3 class="review-page-title">Write Your Review</h3>
                                                <div class="modal-inner-area row">
                                                    <div class="col-lg-6">
                                                        <div class="fb-review-product">
                                                            <img src="{{asset('assets/images/product-details/large-size/3.jpg')}}" alt="FB's Product">
                                                            <div class="fb-review-product-desc">
                                                                <p class="fb-product-name">Printed Summer Dress</p>
                                                                <p>
                                                                    <span>Sleeveless knee-length chiffon dress. V-neckline with elastic under the bust lining.</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fb-review-content">
                                                            <!-- Begin Feedback Area -->
                                                            <div class="feedback-area">
                                                                <div class="feedback">
                                                                    <h3 class="feedback-title">Our Feedback</h3>
                                                                    <form action="#">
                                                                        <p class="your-opinion">
                                                                            <label>Your Rating</label>
                                                                            <span>
                                                                                            <select class="star-rating">
                                                                                              <option value="1">1</option>
                                                                                              <option value="2">2</option>
                                                                                              <option value="3">3</option>
                                                                                              <option value="4">4</option>
                                                                                              <option value="5">5</option>
                                                                                            </select>
                                                                                        </span>
                                                                        </p>
                                                                        <p class="feedback-form">
                                                                            <label for="feedback">Your Review</label>
                                                                            <textarea id="feedback" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                        </p>
                                                                        <div class="feedback-input">
                                                                            <p class="feedback-form-author">
                                                                                <label for="author">Name<span class="required">*</span>
                                                                                </label>
                                                                                <input id="author" name="author" value="" size="30" aria-required="true" type="text">
                                                                            </p>
                                                                            <p class="feedback-form-author feedback-form-email">
                                                                                <label for="email">Email<span class="required">*</span>
                                                                                </label>
                                                                                <input id="email" name="email" value="" size="30" aria-required="true" type="text">
                                                                                <span class="required"><sub>*</sub> Required fields</span>
                                                                            </p>
                                                                            <div class="feedback-btn pb-15">
                                                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">Close</a>
                                                                                <a href="#">Submit</a>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <!-- Feedback Area End Here -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quick View | Modal Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->
        <!-- Begin FB's Product With Banner Area -->
        <div class="fb-product_with_banner fb-featured-pro_with_banner other-product pt-60 pb-60">
            <div class="container">
                <div class="other-product-nav bg-white">
                    <div class="fb-section_title-2">
                        <h2>12 other products in the same category:</h2>
                    </div>
                    <div class="row no-gutters">
                        <!-- Begin FB's Product Wrap Area -->
                        <div class="col-lg-12">
                            <div class="fb-product_wrap bg-white mt-sm-60 mt-xs-60">
                                <div class="fb-other-product_active owl-carousel">
                                    <!-- Begin Single Product Area -->
                                    @foreach($recommendedProducts as $product)
                                        <div class="single-product">
                                            <!-- Begin Product Image Area -->
                                            <div class="product-img">
                                                <a href="{{route('product.productShow',['product'=>$product->slug])}}">
                                                    <img class="primary-img" src="{{asset($product->media->first()->url)}}" loading="lazy" alt="{{$product->name}}">
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
                                                    <span class="new-price">{{config('settings.currency_symbol')}}{{$product->price - ($product->discount /100 * $product->price)}}</span>
                                                    <span class="old-price">{{config('settings.currency_symbol').$product->price}}</span>
                                                </div>
                                                <div class="product-action">
                                                    <ul class="product-action-link">
                                                        <li class="shopping-cart_link"><a href="#" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                        <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                        <li class="single-product_link"><a href="{{route('product.productShow',['product'=>$product->slug])}}" title="Single Product"><i class="ion-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product Content Area End Here -->
                                        </div>
                                @endforeach
                                    <!-- Single Product Area End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- FB's Product Wrap Area End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- FB's Product Area End Here -->
    </div>
    <!-- Fb's Page Content Area End Here -->
@endsection
