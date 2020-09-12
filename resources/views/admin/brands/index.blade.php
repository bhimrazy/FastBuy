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
                        <h1>Dashboard : Brands</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Brands</li>
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
                    <h3 class="card-title">Brands</h3>
                    @can('brand_create')
                        <a href="{{route('admin.brands.create')}}" class="btn-sm btn-success float-right">Add Brand</a>
                    @endcan
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="brands" class="table table-bordered table-striped text-nowrap">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                S.N.
                            </th>
                            <th style="width: 10%">
                                Brand Name
                            </th>
                            <th style="width: 30%">
                                Thumbnail
                            </th>
                            <th>
                                Total Products
                            </th>
                            <th style="width: 20%">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $key=>$brand)
                            <tr data-entry-id="{{ $brand->id }}">
                                <td>
                                    {{$key+1}}
                                </td>
                                <td>
                                    <h5 class="text-bold text-black">
                                        {{$brand->title}}
                                    </h5>
                                    <small>
                                        Created at {{$brand->created_at->format('d-m-Y')}}
                                    </small>
                                </td>
                                <td class="text-center">
                                    <img alt="{{$brand->title}}" class="table-avatar img-full elevation-1" height="60%" src="{{asset($brand->url)}}">

                                </td>
                                <td class="text-left"><span class="badge bg-gradient-teal p-2">{{count($brand->products)}}</span></td>
                                <td class="brand-actions text-left">
                                    @can('brand_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.brands.show', $brand->id) }}">
                                            Show
                                        </a>
                                    @endcan

                                    @can('brand_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.brands.edit', $brand->id) }}">
                                            Edit
                                        </a>
                                    @endcan

                                    @can('brand_delete')
                                        <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete : {{$brand->title}}?');" style="display: inline-block;">
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

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('scripts')
    <script>
        $(function () {
            $("#brands").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>

@endsection

