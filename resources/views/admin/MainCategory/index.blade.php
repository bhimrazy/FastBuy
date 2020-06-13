@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('admin.includes.alert')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Main Category</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Main Categories</h3>
                                <a href="{{route('category.create')}}" class="btn-sm btn-success float-right">Add</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body card-body table-responsive p-0">
                                <table class="table table-bordered table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th style="width: 20px">S.N.</th>
                                        <th>Title</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                   @if('categories')
                                       @foreach($maincategories as $key => $category)
                                           <tr>
                                               <td>{{$key+1}}</td>
                                               <td>{{$category->title}}</td>
                                               <td class="project-actions text-right">
                                                   <a class="btn btn-info btn-sm" href="#">
                                                       <i class="fas fa-pencil-alt">
                                                       </i>
                                                       Edit
                                                   </a>
                                               </td>
                                               <td class="project-actions text-right">
                                                   <a class="btn btn-danger btn-sm" href="#">
                                                       <i class="fas fa-trash">
                                                       </i>
                                                       Delete
                                                   </a>
                                               </td>
                                           </tr>
                                        @endforeach
                                   @else
                                       <tr>
                                           No Record Found.
                                       </tr>
                                   @endif
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <div class="pagination pagination-sm m-0 float-right">
                                    {{$maincategories->links()}}
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
