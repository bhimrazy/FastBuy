<template>
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
                                <div class="col-lg-4 col-md-4 col-sm-6" v-for="product in this.filteredProducts">
                                    <!-- Begin Sigle Product Area -->
                                    <div class="single-product">
                                        <!-- Begin Product Image Area -->
                                        <div class="product-img">
                                            <a v-bind:href="appUrl+'/'+product.slug">
                                                <img class="primary-img" :src="product.media[0].url" alt="FB'S Prduct">
                                                <img class="secondary-img" :src="product.media[1].url" alt="FB'S Prduct">
                                            </a>
                                            <div class="sticker"><span>New</span></div>
                                            <div class="sticker-2"><span>-10%</span></div>
                                        </div>
                                        <!-- Product Image Area End Here -->
                                        <!-- Begin Product Content Area -->
                                        <div class="product-content">
                                            <h2 class="product-name">
                                                <a v-bind:href="appUrl+'/'+product.slug">{{product.title}}</a>
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
                                                <span class="new-price">${{product.price-product.discount*0.01*product.price}}</span>
                                                <span class="old-price">${{product.price}}</span>
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
                                            <a href="">
                                                <img class="primary-img" src="assets/images/product/5_1.jpg" alt="FB'S Prduct">
                                                <img class="secondary-img" src="assets/images/product/5_2.jpg" alt="FB'S Prduct">
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
                                            <a href="">Faded Short Sleeves T-shirt</a>
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
                                                <li class="shopping-cart_link"><a href="" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="" title="Single Product"><i class="ion-link"></i></a></li>
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
                                            <a href="">
                                                <img class="primary-img" src="assets/images/product/10.jpg" alt="FB'S Prduct">
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
                                            <a href="">Printed Summer Dress</a>
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
                                                <li class="shopping-cart_link"><a href="" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="" title="Single Product"><i class="ion-link"></i></a></li>
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
                                            <a href="">
                                                <img class="primary-img" src="assets/images/product/8_1.jpg" alt="FB'S Prduct">
                                                <img class="secondary-img" src="assets/images/product/8_2.jpg" alt="FB'S Prduct">
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
                                            <a href="">Faded Short Sleeves T-shirt</a>
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
                                                <li class="shopping-cart_link"><a href="" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="" title="Single Product"><i class="ion-link"></i></a></li>
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
                                            <a href="">
                                                <img class="primary-img" src="assets/images/product/9.jpg" alt="FB'S Prduct">
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
                                            <a href="">Printed Summer Dress</a>
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
                                                <li class="shopping-cart_link"><a href="" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="" title="Single Product"><i class="ion-link"></i></a></li>
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
                                            <a href="">
                                                <img class="primary-img" src="assets/images/product/1.jpg" alt="FB'S Prduct">
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
                                            <a href="">Faded Short Sleeves T-shirt</a>
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
                                                <li class="shopping-cart_link"><a href="" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="" title="Single Product"><i class="ion-link"></i></a></li>
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
                                            <a href="">
                                                <img class="primary-img" src="assets/images/product/11.jpg" alt="FB'S Prduct">
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
                                            <a href="">Faded Short Sleeves T-shirt</a>
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
                                                <li class="shopping-cart_link"><a href="" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="" title="Single Product"><i class="ion-link"></i></a></li>
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
                                            <a href="">
                                                <img class="primary-img" src="assets/images/product/7_2.jpg" alt="FB'S Prduct">
                                                <img class="secondary-img" src="assets/images/product/7_1.jpg" alt="FB'S Prduct">
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
                                            <a href="">Printed Summer Dress</a>
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
                                                <li class="shopping-cart_link"><a href="" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a href="" title="Single Product"><i class="ion-link"></i></a></li>
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
                <button class="btn-clear-all" @click="clearAll()">Clear all</button>
                <!-- btn-clear-all end -->
            </div>
            <!--Sidebar Categores Box Area End Here -->
            <!--Begin Sidebar Categores Box Area -->
            <div class="sidebar-title-2">
                <h2>Categories</h2>
            </div>
            <div class="sidebar-categores-box sidebar-categores_list mt-sm-25 mt-xs-25">
                <div class="sidebar-categores-checkbox">
                    <div class="form-check" v-for="(category, index) in categories">
                        <input class="form-check-input" type="checkbox" :value="category" :id="'category'+index" v-model="selected.categories">
                        <label class="form-check-label" :for="'category' + index">
                            {{ category.title }}({{category.products.length}})
                        </label>

                    </div>
                </div>
            </div>
            <!--Sidebar Categores Box Area End Here -->
            <!--Begin Sidebar Categores Box Area -->
            <div class="sidebar-title-2">
                <h2>Brands</h2>
            </div>
            <div class="sidebar-categores-box sidebar-categores_list mt-sm-25 mt-xs-25">
                <div class="sidebar-categores-checkbox">
                    <div class="form-check" v-for="(brand, index) in brands">
                        <input class="form-check-input" type="checkbox" :value="brand" :id="'brand'+index" v-model="selected.brands">
                        <label class="form-check-label" :for="'brand' + index">
                            {{ brand.title }}({{brand.products.length}})
                        </label>

                    </div>
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
        </div>
    </div>
</template>

<script>
    export default {
        props: ['categories','products','brands'],
        data: function () {
            return {
                appUrl: 'http://127.0.0.1:8000',
                selected: {
                    prices: '',
                    categories:[],
                    brands:[],
                }
            }
        },
        methods: {
                clearAll(){
                    this.selected.categories= [];
                    this.selected.brands= [];
                },
        },
        computed: {
            filteredProducts: function() {
                if(this.selected.categories.length === 0 && this.selected.brands.length === 0) {
                    return this.products;
                }
                else if (this.selected.categories != '' && this.selected.brands.length === 0){
                    return this.products.filter(item => {
                        return this.selected.categories.some(cat => cat.id === item.subcategory_id)
                    });
                }
                else if (this.selected.brands != '' && this.selected.categories.length === 0){
                    return this.products.filter(item => {
                        return this.selected.brands.some(brand => brand.id === item.brand_id)
                    });
                }

            }
        }

    }
</script>

<style scoped>

</style>
