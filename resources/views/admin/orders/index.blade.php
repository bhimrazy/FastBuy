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
                        <h1>Dashboard : Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Orders List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="orders" class="table table-bordered table-striped text-nowrap">
                                <thead>
                                <tr>
                                    <th>
                                    </th>
                                    <th>
                                        S.N.
                                    </th>
                                    <th>Order Number</th>
                                    <th>Placed By</th>
                                    <th>Total Amount</th>
                                    <th class="text-sm">Payment Status</th>
                                    <th class="text-center">
                                        Status
                                    </th>
                                    <th style="width: 10%">
                                        Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $key => $order)
                                    <tr data-entry-id="{{ $order->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            <small class="text-bold text-black">{{$order->order_number}}</small><br>
                                            <small class="ml-2 badge badge-secondary">{{$order->created_at->diffForHumans()}}</small>
                                        </td>
                                        <td>
                                            <div >{{$order->customer->getFullName()}}</div>{{$order->created_at->format('Y-m-d H:i:s')}}
                                        </td>
                                        <td>{{config('settings.currency_symbol').' '.number_format($order->grand_total)}}</td>
                                        <td><span class="badge badge-{{$order->payment_status?'info':'warning'}}">{{$order->payment_status?'Completed':'Pending'}}</span><br><small class="text-sm-left text-black-50 text-bold">{{$order->transaction_id?'TRAN ID : '.$order->transaction_id:''}}</small></td>
                                        <td><span class="badge badge-{{($order->status=='completed')?'info':'warning'}}">{{$order->status}}</span><br>
                                            <span class="badge badge-{{($order->delivery=='delivered')?'info':'warning'}}">{{$order->delivery}}</span></td>
                                        <td>
                                            @can('order_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.orders.show', $order->id) }}">
                                                    Show
                                                </a>
                                            @endcan

                                            @can('order_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.orders.edit', $order->id) }}">
                                                    Edit
                                                </a>
                                            @endcan

                                            @can('order_delete')
                                                <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete Order : {{$order->order_number}}?');" style="display: inline-block;">
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
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('scripts')
    <script>
        $(function () {
            $("#orders").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>

@endsection
