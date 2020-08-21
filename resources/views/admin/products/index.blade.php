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
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Products</h3>

                            @can('product_create')
                                <a href="{{route('admin.products.create')}}" class="btn-sm btn-success float-right">Add Product</a>
                            @endcan
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
