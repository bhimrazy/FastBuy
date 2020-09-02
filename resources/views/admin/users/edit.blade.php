@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
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
                            <li class="breadcrumb-item active">Edit User</li>
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
                                <h3 class="card-title">Edit User: <span class="badge bg-gradient-indigo">{{$user->getFullName()}}</span></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="POST" action="{{ route("admin.users.update", [$user->id]) }}" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label class="required" for="firstname">First Name</label>
                                        <input class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="firstname" id="firstname" value="{{ old('firstname',$user->firstname) }}" required {{auth()->user()['id'] == $user->id?'':'readonly'}}>
                                        @if($errors->has('firstname'))
                                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="required" for="lastname">Last Name</label>
                                        <input class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text" name="lastname" id="lastname" value="{{ old('lastname',$user->lastname) }}" required {{auth()->user()['id'] == $user->id?'':'readonly'}}>
                                        @if($errors->has('lastname'))
                                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="required" for="email">Email</label>
                                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email',$user->email) }}" required {{auth()->user()['id'] == $user->id?'':'readonly'}}>
                                        @if($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="required" for="password">Password</label>
                                        <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required {{auth()->user()['id'] == $user->id?'':'readonly'}}>
                                        @if($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="required" for="roles">Roles</label>
                                        <div style="padding-bottom: 4px">
                                            <span class="btn btn-info btn-xs select-all" style="border-radius: 0">Select all</span>
                                            <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">Deselect all</span>
                                        </div>
                                        <div class="row">
                                            @foreach($roles as $id => $roles)
                                                <div class="form-check form-check-inline col-xl-3 col-md-2 col-sm-12 p-1">
                                                    <input class="form-check-input checkbox-jquery {{ $errors->has('roles') ? 'is-invalid' : '' }}" type="checkbox" name="roles[]" id="roles{{ $id }}" value="{{ $id }}" {{ (in_array($id, old('roles', [])) || $user->roles->contains($id)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="roles{{ $id }}">{{ $roles }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                        @if($errors->has('roles'))
                                            <span class="text-danger">{{ $errors->first('roles') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-danger" type="submit">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card body -->
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
        $(document).ready(function(){
            $(".select-all").click(function(){
                $(".checkbox-jquery").prop("checked", true);
            });
            $(".deselect-all").click(function(){
                $(".checkbox-jquery").prop("checked", false);
            });
        });
    </script>
@endsection
