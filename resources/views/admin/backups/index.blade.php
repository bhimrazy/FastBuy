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
                   
                    <a href="{{route('admin.backups.create')}}" class="btn-sm btn-success float-right">Create Backup</a>
             
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
                                    <i class="fas fa-file-archive p-1"></i> {{$backup['file_name'] }}
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-archive p-1"></i>{{ $backup['disk'] }}

                                </td>
                                <td class="text-left"><span class="badge bg-gradient-teal p-2">{{ \Carbon\Carbon::createFromTimeStamp($backup['last_modified'])->formatLocalized('%d %B %Y, %H:%M') }}</span></td>
                                <td>
                                    {{ round((int)$backup['file_size']/1048576, 2).' MB' }}
                                </td>
                                <td class="brand-actions text-center">
                                    @can('brand_show')
                                        <a class="btn btn-xs btn-primary p-1 m-1" href="">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    @endcan
                                    @can('brand_delete')
                                    <form action="{{ route('admin.backups.destroy', $backup['file_name']) }}" method="POST" onsubmit="return confirm('Are You Sure Want to Delete : {{$backup['file_name']}}?');" style="display: inline-block;">
                                        @csrf
                                        @method('delete')
                                        <input hidden name="file_path" value="{{$backup['file_path']}}">
                                        <input hidden name="disk" value="{{$backup['disk']}}">
                                        <button class="btn btn-xs btn-danger p-1 m-1 text-white" type="submit">
                                            <i class="fas fa-trash"></i>
                                        </button>
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
