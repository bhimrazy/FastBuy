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
    </div>
    <!-- /.content-wrapper -->
@endsection

