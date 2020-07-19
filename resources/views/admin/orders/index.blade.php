@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard:Orders</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <!-- TABLE: LATEST ORDERS -->
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Latest Orders</h3>

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
                            <th>Order ID</th>
                            <th>Total</th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th>Customer Name</th>
                            <th>Created at</th>
                            <th style="width: 20%">
                                View
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $key=>$order)
                            <tr>
                                <td>
                                    {{$key+1}}
                                </td>
                                <td><a href="">#FB{{$order->id}}HK</a></td>
                                <td>${{$order->total}}</td>
                                <td><span class="badge badge-{{($order->status=='pending')?'warning':'info'}}">{{$order->status}}</span></td>
                                <td>
                                    <div >{{$order->customer->getFullName()}}</div>
                                </td>
                                <td>
                                    <div>{{$order->created_at->format('Y-m-d H:i:s')}}<small class="ml-2 badge badge-secondary">{{$order->created_at->diffForHumans()}}</small></div>
                                </td>
                                <td class="text-left">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
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
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
