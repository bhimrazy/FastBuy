@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product Detail</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Product Detail</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-header">
                    <h3 class="card-title text-bold text-gray-dark">Show Product : {{$product->name}}</h3>
                    @can('product_edit')
                        <a class="btn btn-xs btn-info float-right" href="{{ route('admin.products.edit', $product->id) }}">
                            Edit Product
                        </a>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3 class="d-inline-block d-sm-none">{{$product->name}}</h3>
                            <div class="col-12">
                                <img src="{{asset($product->media->first()->url)}}" class="product-image" alt="Product Image">
                            </div>
                            <div class="col-12 product-image-thumbs">
                                @foreach($product->media as $key=>$image)
                                    <div class="product-image-thumb {{$key?'':'active'}}"><img src="{{asset($image->url)}}" alt="{{$product->name}}"></div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h3 class="my-3 text-black text-bold text-capitalize">{{$product->name}}</h3>
                            <p>{{$product->description}}</p>

                            <hr>
                            <h4 class="text-gray-dark text-bold">Attributes</h4>
                            <p>{{$product->attributes}}</p>

                            <h4 class="mt-3 text-bold">Product Info</h4>
                            <div class="btn-group">
                                <label class="btn btn-default text-center active">
                                    <span class="badge {{$product->status=='Active'?'badge-success':'badge-danger'}}">{{$product->status}}</span>
                                </label>
                                <label class="btn btn-default text-center">
                                    <span class="badge {{$product->stock=='In Stock'?'badge-success':'badge-danger'}}">{{$product->stock}}</span>

                                </label>
                                <label class="btn btn-default text-center">
                                    <span class="badge {{$product->featured=='Featured'?'badge-success':'badge-danger'}}">{{$product->featured}}</span>
                                </label>
                                <label class="btn btn-default text-center">
                                    <span class="badge {{$product->quantity>0?'badge-info':'badge-danger'}}">{{'QTY : '.$product->quantity}}</span>
                                </label>
                                <label class="btn btn-default text-center">
                                    <span class="badge badge-secondary">{{'SKU : '.strtoupper($product->sku)}}</span>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <span class="badge p-2 bg-gradient-blue">{{'Likes : '.$product->likes}}</span>
                                </label>
                                <label>
                                    <span class="badge p-2 bg-gradient-indigo">{{'Rating : '.$product->rating}}</span>
                                </label>
                            </div>

                            <div class="bg-info py-2 px-3 mt-4 rounded">
                                <h2 class="mb-0 text-bold">
                                    {{config('settings.currency_symbol').'.'.$product->price}}
                                </h2>
                                <h4 class="mt-0">
                                    <small>{{'Discount : '.$product->discount.'%'}} </small>
                                </h4>
                            </div>

                            <div class="mt-4">
                                <div class="btn btn-primary btn-lg btn-flat">
                                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                    Add to Cart
                                </div>

                                <div class="btn btn-default btn-lg btn-flat">
                                    <i class="fas fa-heart fa-lg mr-2"></i>
                                    Add to Wishlist
                                </div>
                            </div>

                            <div class="mt-4 product-share">
                                <a href="#" class="text-gray">
                                    <i class="fab fa-facebook-square fa-2x"></i>
                                </a>
                                <a href="#" class="text-gray">
                                    <i class="fab fa-twitter-square fa-2x"></i>
                                </a>
                                <a href="#" class="text-gray">
                                    <i class="fas fa-envelope-square fa-2x"></i>
                                </a>
                                <a href="#" class="text-gray">
                                    <i class="fas fa-rss-square fa-2x"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-4">
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                                <a class="nav-item nav-link" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="false">Description</a>
                                <a class="nav-item nav-link active" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Specifications</a>
                                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="true">Comments</a>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{$product->description}}</div>
                            <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">{{$product->attributes}}</div>
                            <div class="tab-pane fade active show" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
