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
                        <h1>Dashboard : Edit Role</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Edit Role</li>
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
                    Edit Role
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("admin.roles.update", [$role->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="title">Title</label>
                            <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title',$role->title) }}" required>
                            @if($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="required" for="permissions">Permissions</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">Select all</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">Deselect all</span>
                            </div>
                            <div class="row">
                                @foreach($permissions as $id => $permission)
                                    <div class="form-check form-check-inline col-xl-3 col-md-2 col-sm-12 p-1">
                                        <input class="form-check-input checkbox-jquery {{ $errors->has('permissions') ? 'is-invalid' : '' }}" type="checkbox" name="permissions[]" id="inlineCheckbox{{ $id }}" value="{{ $id }}" {{ (in_array($id, old('permissions', [])) || $role->permissions->contains($id)) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineCheckbox{{ $id }}">{{ $permission}}</label>
                                    </div>
                                @endforeach
                            </div>
                            @if($errors->has('permissions'))
                                <span class="text-danger">{{ $errors->first('permissions') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card -->

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
