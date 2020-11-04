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
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><a href="{{route('admin.orders.index')}}"><i class="far fa-bookmark"></i></a></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Orders</span>
                                <span class="info-box-number">{{count($orders)}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><a href="{{route('admin.products.index')}}"><i class="fas fa-briefcase"></i></a></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Products</span>
                                <span class="info-box-number">{{count($products)}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><a href="{{route('admin.transactions.index')}}"><i class="fas fa-shopping-cart"></i></a></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Sales</span>
                                <span class="info-box-number">{{config('settings.currency_symbol').' '.number_format($sales)}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><a href="{{route('admin.customers')}}"><i class="fas fa-users"></i></a></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Customers</span>
                                <span class="info-box-number">{{count($users)}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Monthly Recap Report</h5>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                            <i class="fas fa-wrench"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a class="dropdown-divider"></a>
                                            <a href="#" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="text-center">
                                            <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                        </p>

                                        <div class="chart">
                                            <!-- Sales Chart Canvas -->
                                            <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                        </div>
                                        <!-- /.chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <p class="text-center">
                                            <strong>Goal Completion</strong>
                                        </p>

                                        <div class="progress-group">
                                            Add Products to Cart
                                            <span class="float-right"><b>160</b>/200</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-primary" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->

                                        <div class="progress-group">
                                            Complete Purchase
                                            <span class="float-right"><b>310</b>/400</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-danger" style="width: 75%"></div>
                                            </div>
                                        </div>

                                        <!-- /.progress-group -->
                                        <div class="progress-group">
                                            <span class="progress-text">Visit Premium Page</span>
                                            <span class="float-right"><b>480</b>/800</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" style="width: 60%"></div>
                                            </div>
                                        </div>

                                        <!-- /.progress-group -->
                                        <div class="progress-group">
                                            Send Inquiries
                                            <span class="float-right"><b>250</b>/500</span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-warning" style="width: 50%"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                                            <h5 class="description-header">$35,210.43</h5>
                                            <span class="description-text">TOTAL REVENUE</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                                            <h5 class="description-header">$10,390.90</h5>
                                            <span class="description-text">TOTAL COST</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                                            <h5 class="description-header">$24,813.53</h5>
                                            <span class="description-text">TOTAL PROFIT</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block">
                                            <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                                            <h5 class="description-header">1200</h5>
                                            <span class="description-text">GOAL COMPLETIONS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-8">
                        <!-- MAP & BOX PANE -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">US-Visitors Report</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="d-md-flex">
                                    <div class="p-1 flex-fill" style="overflow: hidden">
                                        <!-- Map will be created here -->
                                        <div id="world-map-markers" style="height: 325px; overflow: hidden">
                                            <div class="map"></div>
                                        </div>
                                    </div>
                                    <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                                        <div class="description-block mb-4">
                                            <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                                            <h5 class="description-header">8390</h5>
                                            <span class="description-text">Visits</span>
                                        </div>
                                        <!-- /.description-block -->
                                        <div class="description-block mb-4">
                                            <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                            <h5 class="description-header">30%</h5>
                                            <span class="description-text">Referrals</span>
                                        </div>
                                        <!-- /.description-block -->
                                        <div class="description-block">
                                            <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                            <h5 class="description-header">70%</h5>
                                            <span class="description-text">Organic</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div><!-- /.card-pane-right -->
                                </div><!-- /.d-md-flex -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="row">
                            <!-- /.col -->

                            <div class="col-md-6">
                                <!-- USERS LIST -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Latest Members</h3>

                                        <div class="card-tools">
                                            <span class="badge badge-danger">8 New Members</span>
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body p-0">
                                        <ul class="users-list clearfix">
                                            @foreach($latestUsers as $user)
                                            <li>
                                                <img loading="lazy" src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&size=128&name={{$user->getFullName()}}" alt="User Image">
                                                <a class="users-list-name" href="#">{{$user->getFullName()}}</a>
                                                <span class="users-list-date">{{$user->created_at->diffForHumans()}}</span>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <!-- /.users-list -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer text-center">
                                        <a href="{{route('admin.customers')}}">View All Users</a>
                                    </div>
                                    <!-- /.card-footer -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- TABLE: LATEST ORDERS -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Latest Orders</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Customer Name</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders->take(5) as $order)
                                            <tr>
                                            <td><a href="">{{$order->order_number}}</a></td>
                                            <td>{{config('settings.currency_symbol').' '.number_format($order->grand_total)}}</td>
                                            <td><span class="badge badge-{{($order->status=='completed')?'info':'warning'}}">{{$order->status}}</span></td>
                                            <td>
                                                <div >{{$order->customer->getFullName()}}</div>
                                            </td>
                                        </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <a href="{{route('admin.orders.index')}}" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-4">
                        <!-- Info Boxes Style 2 -->
                        <div class="info-box mb-3 bg-warning">
                            <span class="info-box-icon"><i class="fas fa-tag"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Inventory</span>
                                <span class="info-box-number">5,200</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3 bg-success">
                            <span class="info-box-icon"><i class="far fa-heart"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Mentions</span>
                                <span class="info-box-number">92,050</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3 bg-danger">
                            <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Downloads</span>
                                <span class="info-box-number">114,381</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3 bg-info">
                            <span class="info-box-icon"><i class="far fa-comment"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Direct Messages</span>
                                <span class="info-box-number">163,921</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Browser Usage</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="chart-responsive">
                                            <canvas id="pieChart" height="150"></canvas>
                                        </div>
                                        <!-- ./chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <ul class="chart-legend clearfix">
                                            <li><i class="far fa-circle text-danger"></i> Chrome</li>
                                            <li><i class="far fa-circle text-success"></i> IE</li>
                                            <li><i class="far fa-circle text-warning"></i> FireFox</li>
                                            <li><i class="far fa-circle text-info"></i> Safari</li>
                                            <li><i class="far fa-circle text-primary"></i> Opera</li>
                                            <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                                        </ul>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer bg-white p-0">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            United States of America
                                            <span class="float-right text-danger">
                        <i class="fas fa-arrow-down text-sm"></i>
                        12%</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            India
                                            <span class="float-right text-success">
                        <i class="fas fa-arrow-up text-sm"></i> 4%
                      </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            China
                                            <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 0%
                      </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.footer -->
                        </div>
                        <!-- /.card -->

                        <!-- PRODUCT LIST -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Recently Added Products</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <ul class="products-list product-list-in-card pl-2 pr-2">
                                    @foreach($products->take(3) as $product)
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="{{asset($product->media->first()->url)}}" alt="{{$product->name}}" class="img-size-50">
                                            </div>
                                            <div class="product-info">
                                                <a href="" class="product-title">{{$product->name}}
                                                    <span class="badge badge-warning float-right">${{$product->price}}</span></a>
                                                <span class="product-description">
                                                    {{$product->description}}.
                                                </span>
                                                {{$product->created_at->diffForHumans()}}
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                    @endforeach

                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="{{route('admin.products.index')}}" class="uppercase">View All Products</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-12">
                        <!-- TABLE: Activities Logs -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Activities Logs</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Activity</th>
                                            <th>IP</th>
                                            <th>User Agent</th>
                                            <th>Time</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($logs->take(10) as $log)
                                            <tr>
                                                <td>{{$log->reference_name}}</td>
                                                <td>{{$log->action}}</td>
                                                <td>{{$log->ip_address}}</td>
                                                <td><small>{{$log->user_agent}}</small></td>
                                                <td>{{$log->created_at->diffForHumans()}}</td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <a href="{{route('admin.orders.index')}}" class="btn btn-sm btn-secondary float-right">View All Logs</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('scripts')
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    <!-- PAGE SCRIPTS -->
    <script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
@endsection
