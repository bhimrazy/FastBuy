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
                            <li class="breadcrumb-item active">Show Role</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header bg-secondary">
                    Show Role :<span class="badge p-2 ml-1 bg-gradient-info">{{$role->title}}</span>
                </div>
                 <div class="card-body">
                <div class="form-group">
                    <div class="form-group">
                        <a class="btn btn-default" href="{{ route('admin.roles.index') }}">
                            Back To List
                        </a>
                    </div>
                    <table class="table table-bordered table-striped">
                        <tbody>
                        <tr>
                            <th>
                                ID
                            </th>
                            <td>
                                {{ $role->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Title
                            </th>
                            <td>
                                {{ $role->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Permissions
                            </th>
                            <td>
                                @foreach($role->permissions as $key => $permissions)
                                    <span class="badge bg-gradient-lightblue">{{ $permissions->title }}</span>
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

