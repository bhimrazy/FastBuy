<div class="row">
    <div class="col-lg-9 order-1 order-lg-2">
        <!-- Begin FB's Banner Area -->
        <div class="shoptopbar-heading">
            <h2>Filter Products</h2>
        </div>
        <!-- Li's Banner Area End Here -->
        <!-- shop-top-bar start -->
        <div class="shop-top-bar mt-25">
            <div class="shop-bar-inner">
                <div class="product-view-mode">
                    <!-- shop-item-filter-list start -->
                    <ul class="nav shop-item-filter-list" role="tablist">
                        <li class="active" role="presentation"><a aria-selected="true" class="active show"
                                data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i
                                    class="fa fa-th"></i></a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view"
                                href="#list-view"><i class="fa fa-th-list"></i></a></li>
                    </ul>
                    <!-- shop-item-filter-list end -->
                </div>
                <div class="toolbar-amount">
                    <span>There are {{ $totalProducts }} products.</span>
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
                            @foreach ($products as $key => $product)
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <!-- Begin Sigle Product Area -->
                                    <div class="single-product">
                                        <!-- Begin Product Image Area -->
                                        <div class="product-img">
                                            <a href="{{ route('product.productShow', ['product' => $product->slug]) }}">
                                                <img class="primary-img"
                                                    src="{{ asset($product->media->first()->url) }}" loading="lazy"
                                                    alt="{{ $product->name }}">
                                                <img class="secondary-img" src="{{ asset($product->media[1]->url) }}"
                                                    loading="lazy" alt="{{ $product->name }}">
                                            </a>
                                            <div class="sticker"><span>New</span></div>
                                            <div class="sticker-2"><span>-{{ $product->discount }}%</span></div>
                                        </div>
                                        <!-- Product Image Area End Here -->
                                        <!-- Begin Product Content Area -->
                                        <div class="product-content">
                                            <h2 class="product-name">
                                                <a
                                                    href="{{ route('product.productShow', ['product' => $product->slug]) }}">{{ $product->name }}</a>
                                            </h2>
                                            <small>{{ excerpt($product->description, 6) }}</small>
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
                                                <span
                                                    class="new-price">${{ $product->price - $product->discount * 0.01 * $product->price }}</span>
                                                <span class="old-price">${{ $product->price }}</span>
                                            </div>
                                            <div class="product-action">
                                                <ul class="product-action-link">
                                                    <li class="shopping-cart_link"><a
                                                            href="{{ route('product.productShow', ['product' => $product->slug]) }}"
                                                            title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                    <li class="quick-view-btn"><a href="#" title="Quick View"
                                                            data-toggle="modal" data-target="#ModalCenter-{{ $key }}"><i
                                                                class="ion-eye"></i></a></li>
                                                    <li class="single-product_link"><a
                                                            href="{{ route('product.productShow', ['product' => $product->slug]) }}"
                                                            title="Single Product"><i class="ion-link"></i></a></li>
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
                <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                    <div class="fb-product_wrap shop-product-area">
                        <div class="row">
                            @foreach ($products->take(5) as $key => $product)
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <!-- Begin Sigle Product Area -->
                                    <div class="single-product">
                                        <!-- Begin Product Image Area -->
                                        <div class="product-img">
                                            <a href="{{ route('product.productShow', ['product' => $product->slug]) }}">
                                                <img class="primary-img"
                                                    src="{{ asset($product->media->first()->url) }}" loading="lazy"
                                                    alt="{{ $product->name }}">
                                                <img class="secondary-img" src="{{ asset($product->media[1]->url) }}"
                                                    loading="lazy" alt="{{ $product->name }}">
                                            </a>
                                            <div class="sticker"><span>New</span></div>
                                            <div class="sticker-2"><span>-{{ $product->discount }}%</span></div>
                                        </div>
                                        <!-- Product Image Area End Here -->
                                    </div>
                                    <!-- Sigle Product Area End Here -->
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content product-content-list_view">
                                        <h2 class="product-name">
                                            <a
                                                href="{{ route('product.productShow', ['product' => $product->slug]) }}">{{ $product->name }}</a>
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
                                            <span
                                                class="new-price">${{ $product->price - $product->discount * 0.01 * $product->price }}</span>
                                            <span class="old-price">${{ $product->price }}</span>
                                        </div>
                                        <p>{{ $product->description }}</p>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a
                                                        href="{{ route('product.productShow', ['product' => $product->slug]) }}"
                                                        title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View"
                                                        data-toggle="modal" data-target="#ModalCenter-{{ $key }}"><i
                                                            class="ion-eye"></i></a>
                                                </li>
                                                <li class="single-product_link"><a
                                                        href="{{ route('product.productShow', ['product' => $product->slug]) }}"
                                                        title="Single Product"><i class="ion-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Content Area End Here -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="pagination-area">
                    <div class="text-center">
                        {{ $products->links() }}
                        {{-- <div class="col-lg-6 col-md-6">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- shop-products-wrapper end -->
    </div>
    <div class="col-lg-3 order-2 order-lg-1">
        <div class="sidebar-title">
            <h2>Home and Kitchen Appliances</h2>
        </div>
        <!--Begin Sidebar Categores Box Area -->
        <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
            <!-- Begin Category Sub Menu Area -->
            <div class="category-sub-menu">
                <ul>
                    @foreach ($categories->take(5) as $category)
                        <li>{{ $category->title }}</li>
                    @endforeach
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
                @foreach ($categories->take(5) as $key => $category)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $category }}"
                            id={{ $category . $key }}>
                        <label class="form-check-label" for={{ $category . $key }}>
                            {{ $category->title }}({{ $category->products_count }})
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <!--Sidebar Categores Box Area End Here -->
        <!--Begin Sidebar Categores Box Area -->
        <div class="sidebar-title-2">
            <h2>Brands</h2>
        </div>
        <div class="sidebar-categores-box sidebar-categores_list mt-sm-25 mt-xs-25">
            <div class="sidebar-categores-checkbox">
                <div class="form-check">
                    @foreach ($brands->take(5) as $key => $brand)
                        <div class="form-check">

                            <input class="form-check-input" type="checkbox" value="{{ $brand }}" id={{ $brand . $key }}>
                            <label class="form-check-label" for={{ $brand . $key }}>
                                {{ $brand->title }}({{ $brand->products_count }})
                            </label>

                        </div>
                    @endforeach
                </div>
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
                        <li><input type="radio" name="product-categori"><a href="#">$15.00 - $17.00 (2)</a></li>
                        <li><input type="radio" name="product-categori"><a href="#">$20.00 - $21.00 (1)</a></li>
                        <li><input type="radio" name="product-categori"><a href="#">$22.00 - $24.00 (2)</a></li>
                        <li><input type="radio" name="product-categori"><a href="#">$25.00 - $28.00 (2)</a></li>
                        <li><input type="radio" name="product-categori"><a href="#">$30.00 - $32.00 (4)</a></li>
                        <li><input type="radio" name="product-categori"><a href="#">$46.00 - $49.00 (1)</a></li>
                        <li><input type="radio" name="product-categori"><a href="#">$50.00 - $53.00 (1)</a></li>
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
                        <li><input type="checkbox" name="product-categori"><a href="#">Short Dress (4)</a></li>
                        <li><input type="checkbox" name="product-categori"><a href="#">Short Sleeve (2) </a></li>
                    </ul>
                </form>
            </div>
        </div>
        <!--Sidebar Categores Box Area End Here -->

        <!--Begin Sidebar Categores Box Area -->
        <div class="sidebar-categores-img fb-img-hover-effect pt-5 mt-sm-25 mt-xs-25">
            <a href="#">
                <img src="assets/images/banner/1_6.jpg" alt="FB'S Banner">
            </a>
        </div>
        <!--Sidebar Categores Box Area End Here -->
        @foreach ($products as $key => $product)
            <!-- Begin Fb's Quick View | Modal Area -->
            <div class="modal fade modal-wrapper" id="ModalCenter-{{ $key }}">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body pt-15 pb-30 pt-sm-10 pb-sm-30 pb-xs-50">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-inner-area row">
                                <div class="col-lg-5 col-md-5 col-sm-5">
                                    <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-navigation-1">
                                            @foreach ($product->media as $media)
                                                <div class="lg-image">
                                                    <img src="{{ asset($media->url) }}" loading="lazy"
                                                        alt="{{ $product->name }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="product-details-thumbs">
                                            @foreach ($product->media as $media)
                                                <div class="sm-image">
                                                    <img src="{{ asset($media->url) }}" loading="lazy"
                                                        alt="{{ $product->name }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!--// Product Details Left -->
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7">
                                    <div class="product-details-view-content pt-40 pt-sm-25">
                                        <div class="product-info">
                                            <h2>{{ $product->name }}</h2>
                                            <div class="price-box pb-20">
                                                <span
                                                    class="new-price new-price-2">${{ $product->price - $product->discount * 0.01 * $product->price }}</span>
                                                <span class="old-price">${{ $product->price }}</span>
                                            </div>
                                            <div class="sticker-2">Save 8%</div>
                                            <div class="product-desc">
                                                <p>
                                                    <span>{{ excerpt($product->description) }}
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
                                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i>
                                                            </div>
                                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i>
                                                            </div>
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
                                                    <a href="https://www.facebook.com/" data-toggle="tooltip"
                                                        target="_blank" title="Facebook">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="https://twitter.com/" data-toggle="tooltip" target="_blank"
                                                        title="Twitter">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="youtube">
                                                    <a href="https://www.youtube.com/" data-toggle="tooltip"
                                                        target="_blank" title="Youtube">
                                                        <i class="fa fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li class="google-plus">
                                                    <a href="https://www.plus.google.com/discover" data-toggle="tooltip"
                                                        target="_blank" title="Google Plus">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li class="instagram">
                                                    <a href="https://www.instagram.com/" data-toggle="tooltip"
                                                        target="_blank" title="Instagram">
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
        @endforeach
    </div>
</div>
