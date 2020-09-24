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
                            <li class="breadcrumb-item active">Show Order</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-info card-outline" >
                <div class="card-header">
                    <div class="row mb-4">
                        <div class="col-6">
                            <h2 class="page-header"><i class="fa fa-globe"></i> {{ $order->order_number }}</h2>
                        </div>
                        <div class="col-6">
                            <h5 class="text-right">Date: {{ $order->created_at->toFormattedDateString() }}</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <a class="btn btn-default" href="{{ route('admin.orders.index') }}">
                            Back to List
                        </a>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-4">Placed By
                            <address><strong>{{ $order->customer->getFullname() }}</strong><br>Email: {{ $order->user->email }}</address>
                        </div>
                        <div class="col-4">Ship To
                            <address><strong>{{ $order->first_name }} {{ $order->last_name }}</strong><br>{{ $order->address }}<br>{{ $order->city }}, {{ $order->country }} {{ $order->post_code }}<br>{{ $order->phone_number }}<br></address>
                        </div>
                        <div class="col-4">
                            <b>Order ID:</b> {{ $order->order_number }}<br>
                            <b>Amount: </b> {{ config('settings.currency_symbol') }}{{' '. number_format($order->grand_total) }}<br>
                            <b>Payment Method:</b> {{ $order->payment_method }}<br>
                            <b>Payment Status:</b> {{ $order->payment_status == 1 ? 'Completed' : 'Not Completed' }}<br>
                            <b>Order Status:</b> {{ $order->status }}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Product</th>
                                    <th>SKU</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->items as $key=>$item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->product->sku }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ config('settings.currency_symbol') }}{{ ' '.$item->price }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
            <div class="card card-purple card-outline" >
                <div class="card-header">
                    <p>Update Order Info : {{$order->order_number}}</p>
                </div>

                    <form method="POST" action="{{ route("admin.orders.update", [$order->id]) }}" onsubmit="return confirm('Are You Sure Want to change Status ?');">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label for="inputCategory">Order Status</label>
                            <select id="inputCategory" name="status" class="form-control custom-select" required>
                                <option selected disabled>Select One</option>
                                <option class="badge text-success" value="pending" {{ $order->status=="pending" ? 'selected' : '' }}>pending</option>
                                <option class="badge text-success" value="processing" {{ $order->status=="processing" ? 'selected' : '' }}>processing</option>
                                <option class="badge text-success" value="completed" {{ $order->status=="completed" ? 'selected' : '' }}>completed</option>
                                <option class="badge text-success" value="declined" {{ $order->status=="canceled" ? 'selected' : '' }}>canceled</option>
                            </select>
                            @error('status')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                            <div class="form-group">
                                <label for="inputCategory">Delivery</label>
                                <select id="inputCategory" name="status" class="form-control custom-select" required>
                                    <option selected disabled>Select One</option>
                                    <option class="badge text-success" value="pending" {{ $order->status=="pending" ? 'selected' : '' }}>pending</option>
                                    <option class="badge text-success" value="processing" {{ $order->status=="processing" ? 'selected' : '' }}>processing</option>
                                    <option class="badge text-success" value="completed" {{ $order->status=="completed" ? 'selected' : '' }}>delivered</option>
                                    <option class="badge text-success" value="declined" {{ $order->status=="canceled" ? 'selected' : '' }}>canceled</option>
                                </select>
                                @error('status')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputNotes">Order Notes</label>
                                <textarea id="inputNotes" class="textarea" placeholder="Place some text here" name="notes"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('notes',$order->notes)}}</textarea>
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
