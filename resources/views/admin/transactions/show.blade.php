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
                        <h1>Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Show Transaction</li>
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
                    Show Transaction
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.transactions') }}">
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
                                    Customer Verified
                                </th>
                                <td>
                                    {{ $transaction->customer_name}}
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

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

