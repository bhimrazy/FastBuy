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
                                    <th width="10">

                                    </th>
                                    <th style="width: 1%">
                                        S.N.
                                    </th>
                                    <th>Order ID</th>
                                    <th>Total</th>
                                    <th style="width: 8%" class="text-center">
                                        Status
                                    </th>
                                    <th>Customer Name</th>
                                    <th>Created at</th>
                                    <th style="width: 20%">
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
                                        <td><a href="">{{$order->order_number}}</a></td>
                                        <td>{{config('settings.currency_symbol').' '.number_format($order->grand_total)}}</td>
                                        <td><span class="badge badge-{{($order->status=='pending')?'warning':'info'}}">{{$order->status}}</span></td>
                                        <td>
                                            <div >{{$order->customer->getFullName()}}</div>
                                        </td>
                                        <td>
                                            <div>{{$order->created_at->format('Y-m-d H:i:s')}}<br><small class="ml-2 badge badge-secondary">{{$order->created_at->diffForHumans()}}</small></div>
                                        </td>
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
                                                <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete : {{$order->firstname}}?');" style="display: inline-block;">
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
