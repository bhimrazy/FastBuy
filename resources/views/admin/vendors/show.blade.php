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
                        <h1>Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Show Vendor</li>
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
                    Show Vendor
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.vendors.index') }}">
                                Back to List
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th>
                                    Vendors ID
                                </th>
                                <td>
                                    {{ $vendor->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <td>
                                    {{ $vendor->getFullName()}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Email
                                </th>
                                <td>
                                    {{ $vendor->email }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Type
                                </th>
                                <td>
                                    {{ $vendor->type }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Products
                                </th>
                                <td>
                                    {{ $vendor->products_count }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Email Verified at
                                </th>
                                <td><span class="badge bg-gradient-{{$vendor->email_verified_at?'blue':'danger'}} p-2">{{$vendor->email_verified_at?$vendor->email_verified_at->format('d-m-Y H:i:s'):'Not Verified'}}</span></td>
                            </tr>
                            <tr>
                                <th>
                                    Roles
                                </th>
                                <td>
                                    @foreach($vendor->roles as $key => $roles)
                                        <span class="badge bg-gradient-lightblue">{{ $roles->title }}</span>
                                    @endforeach
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
        <!-- Product content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Products</h3>
                        </div>
                        <div class="card-body">
                            <table id="products" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 1%">
                                        S.N.
                                    </th>
                                    <th style="width: 10%">
                                        Product Name
                                    </th>
                                    <th style="width: 10%">
                                        Thumbnail
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Tags
                                    </th>
                                    <th style="width: 8%" class="text-center">
                                        Product Info
                                    </th>
                                    <th style="width: 20%">
                                        Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $key=>$product)
                                    <tr data-entry-id="{{ $product->id }}">
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            <span class="text-bold text-gray-dark">
                                                {{$product->name}}
                                            </span>
                                            <br/>
                                            <small>
                                                Created at {{$product->created_at->format('d-m-Y')}}
                                            </small>
                                        </td>
                                        <td>
                                            <ul class="list-inline">
                                                @foreach($product->media->take(2) as $image)
                                                    <li class="list-inline-item p-1">
                                                        <img alt="{{$product->name}}" class="table-avatar img-circle elevation-1" width="60" height="60" src="{{asset($image->url)}}">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            {{config('settings.currency_symbol').'.'}} {{$product->price}}
                                        </td>
                                        <td class="product-state">
                                            @foreach($product->tags as $tag)
                                                <span class="badge badge-primary">{{$tag->title}}</span><br>
                                            @endforeach
                                        </td>
                                        <td class="product-state">
                                            <span class="badge {{$product->status=='Active'?'badge-success':'badge-danger'}}">{{$product->status}}</span>
                                            <span class="badge {{$product->stock=='In Stock'?'badge-success':'badge-danger'}}">{{$product->stock}}</span>
                                            <span class="badge {{$product->featured=='Featured'?'badge-success':'badge-danger'}}">{{$product->featured}}</span>
                                            <span class="badge badge-secondary">{{$product->sku}}</span><br>
                                            <span class="badge {{$product->quantity>0?'badge-info':'badge-danger'}}">{{$product->quantity}}</span>

                                        </td>
                                        <td>
                                            @can('product_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.products.show', $product->id) }}">
                                                    Show
                                                </a>
                                            @endcan

                                            @can('product_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.products.edit', $product->id) }}">
                                                    Edit
                                                </a>
                                            @endcan

                                            @can('product_delete')
                                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete : {{$product->name}}?');" style="display: inline-block;">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                                </form>
                                            @endcan

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('scripts')
    <script>
        $(function () {
            $("#products").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>

@endsection
