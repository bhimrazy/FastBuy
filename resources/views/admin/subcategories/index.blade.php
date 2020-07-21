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
                        <h1>Dashboard : SubCategories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">SubCategories</li>
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
                            <h3 class="card-title">SubCategory List</h3>
                            @can('product_category_create')
                                <a href="{{route('admin.subcategories.create')}}" class="btn-sm btn-success float-right">Add SubCategory</a>
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
                                @foreach($subcategories as $key => $subcategory)
                                    <tr data-entry-id="{{ $subcategory->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $key+1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $subcategory->title?? '' }}
                                        </td>
                                        <td>
                                            @can('product_category_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.subcategories.show', $subcategory->id) }}">
                                                    View
                                                </a>
                                            @endcan

                                            @can('product_category_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.subcategories.edit', $subcategory->id) }}">
                                                    Edit
                                                </a>
                                            @endcan

                                            @can('product_category_delete')
                                                <form action="{{ route('admin.subcategories.destroy', $subcategory->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want to Delete : {{$subcategory->title}}?');" style="display: inline-block;">
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
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
