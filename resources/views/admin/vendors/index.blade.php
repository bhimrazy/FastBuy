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
                        <h1>Dashboard : Vendors</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Vendors</li>
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
                            <h3 class="card-title">Vendor List</h3>
                            @can('vendor_create')
                                <a href="{{route('admin.vendors.create')}}" class="btn-sm btn-success float-right">Add Vendor</a>
                            @endcan
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="vendors" class="table table-bordered table-striped text-nowrap">
                                <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Email verified at
                                    </th>
                                    <th>
                                        Roles
                                    </th>
                                    <th>
                                       Control(s)
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($vendors as $key => $vendor)
                                    <tr data-entry-id="{{ $vendor->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $vendor->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $vendor->getFullName() ?? '' }}
                                        </td>
                                        <td>
                                            {{ $vendor->email ?? '' }}
                                        </td>
                                        <td class="text-center"><span class="badge bg-gradient-{{$vendor->email_verified_at?'blue':'danger'}} p-2">{{$vendor->email_verified_at?$vendor->email_verified_at->format('d-m-Y H:i:s'):'Not Verified'}}</span></td>
                                        <td>
                                            @foreach($vendor->roles as $key => $item)
                                                <span class="badge badge-info">{{ $item->title }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @can('vendor_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.vendors.show', $vendor->id) }}">
                                                    Show
                                                </a>
                                            @endcan

                                            @can('vendor_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.vendors.edit', $vendor->id) }}">
                                                    Edit
                                                </a>
                                            @endcan

                                            @can('vendor_delete')
                                                <form action="{{ route('admin.vendors.destroy', $vendor->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete : {{$vendor->firstname}}?');" style="display: inline-block;">
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
            $("#vendors").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>

@endsection
