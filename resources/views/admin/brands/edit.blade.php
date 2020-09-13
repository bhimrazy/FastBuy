@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard : Brands</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Edit Brand</li>
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
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Brand : {{$brand->title??''}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('admin.brands.update',[$brand->id])}}" role="form" id="quickForm" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" placeholder="Enter title for brand" value="{{ old('title',$brand->title) }}" required>
                                        @error('title')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div id="brand-img">
                                            <img src="{{asset($brand->url)}}" alt="{{$brand->title}}" width="auto" height="100px">
                                        </div>
                                        <div class="custom-file">
                                            <label class="control-label">Brand Image</label>
                                            <input class="form-control p-1" id="fileToUpload" type="file" name="image" onchange="load(event,'brand-img')" accept=".png, .jpg, .jpeg" >
                                        </div>
                                        <small>Max size 1MB.</small>
                                        @error('image')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('scripts')
    <script>
        load= function(event,id) {
            document.getElementById(id).innerHTML='Preview <br>';
            var files=event.target.files;
            console.log(files[0]);
            if(files.length<=1){
                for (let i = 0; i < files.length; i++) {
                    var img = document.createElement('IMG');
                    img.id = i;
                    img.className='p-1'
                    img.src =URL.createObjectURL(files[i]);
                    img.setAttribute('height', '100px');
                    img.setAttribute('width', 'auto');
                    document.getElementById(id).appendChild(img);
                }
            }else{
                document.getElementById(id).innerHTML='<small class="text-danger">File Limit Exceeded</small>';
                document.getElementById('fileToUpload').value=null;
            }
        };
    </script>
@endsection
