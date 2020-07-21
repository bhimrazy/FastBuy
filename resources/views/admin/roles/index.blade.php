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
                        <h1>Dashboard : Roles</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Roles</li>
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
                            <h3 class="card-title">Role List</h3>
                            @can('role_create')
                                <a href="{{route('admin.roles.create')}}" class="btn-sm btn-success float-right">Add Role</a>
                            @endcan
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th width="10"></th>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Permissions</th>
                                    <th>Control(s)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $key => $role)
                                    <tr data-entry-id="{{ $role->id }}">
                                        <td></td>
                                        <td> {{ $key+1 ?? '' }}</td>
                                        <td> {{ $role->title ?? '' }}</td>
                                        <td>
                                            @foreach($role->permissions as $key => $item)
                                                <span class="badge badge-info">{{ $item->title }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @can('role_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.roles.show', $role->id) }}">
                                                    View
                                                </a>
                                            @endcan
                                            @can('role_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.roles.edit', $role->id) }}">
                                                    Edit
                                                </a>
                                            @endcan

                                            @can('role_delete')
                                                <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete : {{$role->title}}?');" style="display: inline-block;">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                                </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
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
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>

@endsection
