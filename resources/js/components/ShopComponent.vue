<template>
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
                            <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                            <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                        <!-- shop-item-filter-list end -->
                    </div>
                    <div class="toolbar-amount">
                        <span>There are {{this.products.length}} products.</span>
                    </div>
                </div>
            </div>
            <!-- shop-top-bar end -->
            <!-- shop-products-wrapper start -->
            <div class="shop-products-wrapper bg-white mt-30 pb-60 pb-sm-30">
                <div class="tab-content">
                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                        <div class="fb-product_wrap shop-product-area">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6" v-for="product in this.filteredProducts.slice(0,10)">
                                    <!-- Begin Sigle Product Area -->
                                    <div class="single-product">
                                        <!-- Begin Product Image Area -->
                                        <div class="product-img">
                                            <a v-bind:href="asset('/'+product.slug)">
                                                <img class="primary-img" :src="asset(product.media[0].url)" alt="FB'S Prduct">
                                                <img class="secondary-img" :src="asset(product.media[1].url)" alt="FB'S Prduct">
                                            </a>
                                            <div class="sticker"><span>New</span></div>
                                            <div class="sticker-2"><span>-{{product.discount}}%</span></div>
                                        </div>
                                        <!-- Product Image Area End Here -->
                                        <!-- Begin Product Content Area -->
                                        <div class="product-content">
                                            <h2 class="product-name">
                                                <a v-bind:href="asset('/'+product.slug)">{{product.name}}</a>
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
                                                    <li class="shopping-cart_link"><a v-bind:href="asset('/'+product.slug)" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                    <li class="quick-view-btn"><a v-bind:href="asset('/'+product.slug)" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                    <li class="single-product_link"><a v-bind:href="asset('/'+product.slug)" title="Single Product"><i class="ion-link"></i></a></li>
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
                            <div class="row" v-for="product in this.filteredProducts.slice(0,10)">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <!-- Begin Sigle Product Area -->
                                    <div class="single-product">
                                        <!-- Begin Product Image Area -->
                                        <div class="product-img">
                                            <a v-bind:href="asset('/'+product.slug)">
                                                <img class="primary-img" :src="asset(product.media[0].url)" alt="FB'S Prduct">
                                                <img class="secondary-img" :src="asset(product.media[1].url)" alt="FB'S Prduct">
                                            </a>
                                            <div class="sticker"><span>New</span></div>
                                            <div class="sticker-2"><span>-{{product.discount}}%</span></div>
                                        </div>
                                        <!-- Product Image Area End Here -->
                                    </div>
                                    <!-- Sigle Product Area End Here -->
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <!-- Begin Product Content Area -->
                                    <div class="product-content product-content-list_view">
                                        <h2 class="product-name">
                                            <a v-bind:href="asset('/'+product.slug)">{{product.name}}</a>
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
                                            <span class="new-price">${{product.price-product.discount*0.01*product.price}}</span>
                                            <span class="old-price">${{product.price}}</span>
                                        </div>
                                        <p>{{product.description}}</p>
                                        <div class="product-action">
                                            <ul class="product-action-link">
                                                <li class="shopping-cart_link"><a v-bind:href="asset('/'+product.slug)" title="Shopping Cart"><i class="ion-bag"></i></a></li>
                                                <li class="quick-view-btn"><a v-bind:href="asset('/'+product.slug)" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-eye"></i></a></li>
                                                <li class="single-product_link"><a v-bind:href="asset('/'+product.slug)" title="Single Product"><i class="ion-link"></i></a></li>
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
                <h2>Home and Kitchen Appliances</h2>
            </div>
            <!--Begin Sidebar Categores Box Area -->
            <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                <!-- Begin Category Sub Menu Area -->
                <div class="category-sub-menu">
                    <ul v-for="(category, index) in categories.slice(0,5)">
                        <li>{{category.title}}</li>
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
        props: ['categories','products','brands','base_url'],
        data: function () {
            return {
                appUrl:this.base_url,
                selected: {
                    categories:[],
                    brands:[],
                },
                pageNumber: 0
            }
        },
        methods: {
                asset(url){
                 return this.appUrl+url
                },
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
