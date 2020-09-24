@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard : Transactions</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Transactions</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <!-- TABLE: LATEST ORDERS -->
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Transactions</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="customers" class="table table-bordered table-striped text-nowrap">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                S.N.
                            </th>
                            <th>Transaction ID</th>
                            <th>Order Num</th>
                            <th>
                                Customer Name
                            </th>
                            <th>Payment</th>
                            <th>Amount</th>
                            <th>Checked</th>
                            <th>
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $key => $transaction)
                            <tr data-entry-id="{{ $transaction->id }}">
                                <td>
                                    {{$key+1}}
                                </td>
                                <td><span class="text-bold text-gray-dark">{{ucwords($transaction->transaction_id)}}</span><br>
                                    <small>{{$transaction->created_at->format('Y-m-d H:i:s')}}</small>
                                </td>
                                <td class="text-sm"><small>{{$transaction->order_number}}</small> <br><small>{{$transaction->created_at->diffForHumans()}}</small></td>
                                <td>{{$transaction->customer_name}}</td>
                                <td class="text-center"><span class="badge bg-gradient-indigo">Method : {{ucfirst($transaction->payment_method)}}</span>
                                    <br><span class="badge badge-{{$transaction->payment_status?'info':'warning'}}">{{$transaction->payment_status?'Completed':'Pending'}}</span>
                                </td>
                                <td>{{config('settings.currency_symbol').' '.number_format($transaction->transaction_amount)}}</td>
                                <td><span class="badge badge-{{$transaction->updated_at!=null?'info':'warning'}}">{{$transaction->updated_at!=null?'checked':'unchecked'}}<br>{{$transaction->updated_at!=null?$transaction->updated_at->diffForHumans():'unchecked'}}</span></td>
                                <td>
                                @can('transaction_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.transactions.show', $transaction->id) }}">
                                            Show
                                        </a>
                                @endcan
                                    @can('transaction_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.transactions.edit', $transaction->id) }}">
                                            Edit
                                        </a>
                                    @endcan

                                    @can('transaction_delete')
                                        <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete Order : {{$transaction->transaction_id}}?');" style="display: inline-block;">
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
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('scripts')
    <script>
        $(function () {
            $("#customers").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>

@endsection

