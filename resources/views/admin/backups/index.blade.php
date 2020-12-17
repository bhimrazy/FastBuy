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
                        <h1>Dashboard : Backup</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Backups</li>
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
                    <h3 class="card-title">Backups</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="backups" class="table table-bordered table-striped text-nowrap">
                        <thead>
                        <tr>
                            <th >
                                S.N.
                            </th>
                            <th >
                                FileName
                            </th>
                            <th>
                                Disk
                            </th>
                            <th >
                                Date
                            </th>
                            <th>
                                Size
                            </th>
                            <th >
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($backups as $key => $backup)
                            <tr data-entry-id="{{ $backup['id'] }}">
                                <td>
                                    {{$key+1}}
                                </td>
                                <td class="text-wrap">
                                    {{$backup['file_path'] }}
                                </td>
                                <td class="text-center">
                                    {{ $backup['disk'] }}

                                </td>
                                <td class="text-left"><span class="badge bg-gradient-teal p-2">{{ \Carbon\Carbon::createFromTimeStamp($backup['last_modified'])->formatLocalized('%d %B %Y, %H:%M') }}</span></td>
                                <td>
                                    {{ round((int)$backup['file_size']/1048576, 2).' MB' }}
                                </td>
                                <td class="brand-actions text-left">
                                    @can('brand_show')
                                        <a class="btn btn-xs btn-primary" href="">
                                            Download
                                        </a>
                                    @endcan



                                    @can('brand_delete')
                                    <a class="btn btn-xs btn-danger" href="">
                                        Delete
                                    </a>
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

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('scripts')
    <script>
        $(function () {
            $("#backups").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
       
    </script>
@endsection
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection
