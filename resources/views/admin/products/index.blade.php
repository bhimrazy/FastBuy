@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('admin.includes.alert')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Products</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Products</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-bordered table-responsive table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                               S.N.
                            </th>
                            <th style="width: 10%">
                                Product Name
                            </th>
                            <th style="width: 30%">
                                Thumbnail
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Tags
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%">
                                View
                            </th>
                            <th style="width: 20%">
                                Edit
                            </th>
                            <th style="width: 20%">
                                Delete
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key=>$product)
                            <tr>
                                <td>
                                    {{$key+1}}
                                </td>
                                <td>
                                    <a>
                                        {{$product->title}}
                                    </a>
                                    <br/>
                                    <small>
                                        Created at {{$product->created_at->format('d-m-Y')}}
                                    </small>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        @foreach($product->media as $image)
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar img-circle elevation-1" width="60" height="60" src="{{asset($image->url)}}">
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    Rs.{{$product->price}}
                                </td>
                                <td class="product-state">
                                    @foreach($product->tags as $tag)
                                        <span class="badge badge-primary">{{$tag->title}}</span><br>
                                    @endforeach
                                </td>
                                <td class="product-state">
                                    <span class="badge badge-success">In Stock</span>
                                </td>
                                <td class="product-actions text-left">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                </td>
                                <td class="product-actions text-left">
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                </td>
                                <td class="product-actions text-left">
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <div class="pagination pagination-sm m-0 float-right">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

