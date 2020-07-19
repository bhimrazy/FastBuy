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
                            <li class="breadcrumb-item active">Dashboard:Customers</li>
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
                    <h3 class="card-title">All Customers</h3>

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
                            <th>Name</th>
                            <th>Email</th>
                            <th style="width: 8%" class="text-center">
                                Phone Number
                            </th>
                            <th>User_Type</th>
                            <th>Created at</th>
                            <th>Verified</th>
                            <th style="width: 20%">
                                View
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key=>$user)
                            <tr>
                                <td>
                                    {{$key+1}}
                                </td>
                                <td><a href="">{{ucwords($user->getFullName())}}</a>
                                    <br/>
                                    <small>
                                        Orders Placed : {{count($user->customerOrders)}}
                                    </small>
                                </td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->mobile?$user->mobile:'NA'}}</td>
                                <td><span class="badge bg-gradient-indigo p-2">{{ucfirst($user->type)}}</span></td>
                                <td>{{$user->created_at->format('Y-m-d H:i:s')}}</td>
                                <td class="text-center"><span class="badge bg-gradient-{{$user->email_verified_at?'blue':'danger'}} p-2">{{$user->email_verified_at?'Verified':'Not Verified'}}</span></td>
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
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
