@extends('client.layouts.client')
@section('body')
    <!-- Begin FB's Breadcrumb Area -->
    <div class="breadcrumb-area pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Compare</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FB's Breadcrumb Area End Here -->
    <!-- Begin Compare Area -->
    <div class="compare-area pt-60 pb-60">
        <div class="container">
            <div class="compare-table table-responsive">
                <table class="table table-bordered table-hover mb-0">
                    <tbody>
                    <tr>
                        <th class="compare-column-titles">Image</th>
                        <td class="compare-column-productinfo">
                            <div class="compare-pdoduct-image">
                                <a href="{{route('product-details')}}">
                                    <img src="{{asset('assets/images/product/2-9_1.jpg')}}" alt="Product Image">
                                </a>
                                <a href="{{route('cart')}}" class="ho-button ho-button-sm">
                                    <span>ADD TO CART</span>
                                </a>
                            </div>
                        </td>
                        <td class="compare-column-productinfo">
                            <div class="compare-pdoduct-image">
                                <a href="{{route('product-details')}}">
                                    <img src="{{asset('assets/images/product/2-9_2.jpg')}}" alt="Product Image">
                                </a>
                                <a href="{{route('cart')}}" class="ho-button ho-button-sm">
                                    <span>ADD TO CART</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td>
                            <h5 class="compare-product-name"><a href="{{route('product-details')}}">Sanai</a></h5>
                        </td>
                        <td>
                            <h5 class="compare-product-name"><a href="{{route('product-details')}}">Meito</a></h5>
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>Impressively thin and light, the HP Pavilion G6 empowers users to create,
                            connect, and collaborate, using enterprise-class performance</td>
                        <td>Impressively thin and light, the HP ProBook 450 G4 empowers users to create,
                            connect, and collaborate, using enterprise-class performance</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>$800</td>
                        <td>$1020</td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td>Black</td>
                        <td>Red</td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <td>Medium</td>
                        <td>Large</td>
                    </tr>
                    <tr>
                        <th>Stock</th>
                        <td>In Stock</td>
                        <td>Stock Out</td>
                    </tr>
                    <tr>
                        <th>Rating</th>
                        <td>
                            <div class="li-pro-rating li-rattingbox">
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o li-star"></i></span>
                                <span><i class="fa fa-star-o li-star"></i></span>
                            </div>
                        </td>
                        <td>
                            <div class="li-pro-rating li-rattingbox">
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                                <span><i class="fa fa-star-o li-star"></i></span>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Compare Area End Here -->
@endsection
