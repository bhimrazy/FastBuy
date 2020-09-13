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
                            <li class="breadcrumb-item active">Show Brand</li>
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
                    Show Brand
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.brands.index') }}">
                                Back to List
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th>
                                    Brands ID
                                </th>
                                <td>
                                    {{ $brand->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Title
                                </th>
                                <td>
                                    {{ $brand->title}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Total Products
                                </th>
                                <td class="text-left"><span class="badge bg-gradient-teal p-2">{{count($brand->products)}}</span></td>
                            </tr>
                            <tr>
                                <th>
                                    Thumbnail
                                </th>
                                <td class="text-left">
                                    <img alt="{{$brand->title}}" class="table-avatar img-full elevation-1" height="60%" src="{{asset($brand->url)}}">
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

