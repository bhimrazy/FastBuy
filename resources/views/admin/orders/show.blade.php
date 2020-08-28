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
                            <li class="breadcrumb-item active">Show Order</li>
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
                    Show Order
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.orders.index') }}">
                                Back to List
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th>
                                    Order ID
                                </th>
                                <td>
                                    {{ $order->order_number }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Customer Name
                                </th>
                                <td>
                                    {{ $order->customer->getFullName()}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Total price
                                </th>
                                <td>
                                    {{config('settings.currency_symbol').' '.number_format($order->grand_total)}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
            <div class="card" >
                <div class="card-header">
                    Ordered Items
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item bg-primary text-white">
                            <div class="row">
                                <div class="col-3">Thumbnail</div>
                                <div class="col-3">Title</div>
                                <div class="col-3">Qty</div>
                                <div class="col-3">Price</div>
                            </div>
                        </li>
                        @foreach($order->items as $key=> $orderItem)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-3"><img width="90" height="100" src="{{asset($orderItem->product->media->first()->url)}}" alt="{{$orderItem->product->name}}"></div>
                                    <div class="col-3">{{$orderItem->product->name}}</div>
                                    <div class="col-3">{{$orderItem->quantity}}</div>
                                    <div class="col-3">{{config('settings.currency_symbol').' '.$orderItem->price}}</div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

