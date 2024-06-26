@extends('admin.layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('/plugins/summernote/summernote-bs4.css')}}">
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    @include('admin.includes.alert')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Edit Transaction</li>
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
                    Edit Transaction
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.transactions.index') }}">
                                Back to List
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th>
                                    Transaction ID
                                </th>
                                <td>
                                    {{ucwords($transaction->transaction_id)}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Order Number
                                </th>
                                <td>
                                    {{ucwords($transaction->order_number)}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Customer Name
                                </th>
                                <td>
                                    {{ $transaction->customer_name}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Payment Status
                                </th>
                                <td>
                                    {{$transaction->payment_status?'Completed':'Pending'}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Amount
                                </th>
                                <td>
                                    {{config('settings.currency_symbol').' '.number_format($transaction->transaction_amount)}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
            <!-- /.card -->
            <div class="card card-purple card-outline" >
                <div class="card-header">
                    <p>Update Transaction Info : {{$transaction->transaction_id}}</p>
                </div>

                <form method="POST" action="{{ route("admin.transactions.update", [$transaction->id]) }}" onsubmit="return confirm('Are You Sure Want to change Status ?');">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputCategory">Payment Status</label>
                            <select id="inputCategory" name="payment_status" class="form-control custom-select" required>
                                <option selected disabled>Select One</option>
                                <option class="badge text-success" value="pending" {{ $transaction->payment_status==false? 'selected' : '' }}>pending</option>
                                <option class="badge text-success" value="completed" {{ $transaction->payment_status==true? 'selected' : '' }}>completed</option>
                            </select>
                            @error('payment_status')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputNotes">Transaction Notes</label>
                            <textarea id="inputNotes" class="textarea" placeholder="Place some text here" name="notes"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('notes',$transaction->notes)}}</textarea>
                            @error('notes')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('scripts')
    <script src="{{asset('/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
@endsection
