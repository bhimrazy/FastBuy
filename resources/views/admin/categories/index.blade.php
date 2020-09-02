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
                        <h1>Dashboard : Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Categories</li>
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
                            <h3 class="card-title">Category List</h3>
                            @can('product_category_create')
                                <a href="{{route('admin.categories.create')}}" class="btn-sm btn-success float-right">Add Category</a>
                            @endcan
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="categories" class="table table-bordered table-striped text-nowrap">
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
                                        Status
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $key => $category)
                                    <tr data-entry-id="{{ $category->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $key+1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $category->title?? '' }}
                                        </td>
                                        <td>
                                            <div class="custom-control custom-switch custom-switch-on-success">
                                                <input type="checkbox" name="status" data-id="{{ $category->id }}" class="custom-control-input" id="customSwitch{{$category->id}}" {{ $category->status? 'checked' : '' }}>
                                                <label class="custom-control-label" for="customSwitch{{$category->id}}"></label>
                                            </div>
                                        </td>
                                        <td>
                                            @can('product_category_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.categories.show', $category->id) }}">
                                                    View
                                                </a>
                                            @endcan

                                            @can('product_category_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.categories.edit', $category->id) }}">
                                                    Edit
                                                </a>
                                            @endcan

                                            @can('product_category_delete')
                                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want to Delete : {{$category->title}}?');" style="display: inline-block;">
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
            $("#categories").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });

        $(document).ready(function(){
            $('.custom-control-input').change(function () {
                if(confirm('Are You Sure Want to update the status?')){
                    let status = $(this).prop('checked') === true ? 1 : 0;
                    let categoryId = $(this).data('id');
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: '{{ route('admin.categories.update.status') }}',
                        data: {'status': status, 'category_id': categoryId},
                        error: function(xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            setTimeout(function(){
                                location.reload()
                            },1000);
                            toastr.options.closeButton = true;
                            toastr.options.closeMethod = 'fadeOut';
                            toastr.options.closeDuration = 100;
                            toastr.error(err.message);
                        },
                        success: function (data) {
                            if(data.success){
                                setTimeout(function(){
                                    location.reload()
                                },1000);
                                toastr.options.closeButton = true;
                                toastr.options.closeMethod = 'fadeOut';
                                toastr.options.closeDuration = 100;
                                toastr.success(data.success);
                            }
                        }
                    });
                }
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection
