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
                        <h1>Dashboard : Tags</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Tags</li>
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
                            <h3 class="card-title">Tag List</h3>
                            @can('product_category_create')
                                <a href="{{route('admin.tags.create')}}" class="btn-sm btn-success float-right">Add Tag</a>
                            @endcan
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped text-nowrap">
                                <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        S.N.
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Control(s)
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tags as $key => $tag)
                                    <tr data-entry-id="{{ $tag->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $key+1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $tag->title?? '' }}
                                        </td>
                                        <td>
                                            @can('product_category_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.tags.show', $tag->id) }}">
                                                    View
                                                </a>
                                            @endcan

                                            @can('product_category_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.tags.edit', $tag->id) }}">
                                                    Edit
                                                </a>
                                            @endcan

                                            @can('product_category_delete')
                                                <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want to Delete : {{$tag->title}}?');" style="display: inline-block;">
                                                    @csrf
                                                    @method('delete')
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
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
