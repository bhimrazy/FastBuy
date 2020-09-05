@extends('client.layouts.client')
@section('body')
    <!-- Begin FB's Breadcrumb Area -->
    <div class="breadcrumb-area pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">My Account : Dashboard | {{$user->firstname}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('client.includes.alert')
        </div>
    </div>

    <!-- FB's Breadcrumb Area End Here -->
    <!-- Begin FB's Page Content Area -->
    <main class="page-content">
        <!-- Begin FB's Account Page Area -->
        <div class="account-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="account-dashboard-tab" data-toggle="tab"
                                   href="#account-dashboard" role="tab" aria-controls="account-dashboard"
                                   aria-selected="true">Dashboard : {{ucfirst($user->firstname)}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-orders-tab" data-toggle="tab"
                                   href="#account-orders" role="tab" aria-controls="account-orders"
                                   aria-selected="false">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-address-tab" data-toggle="tab"
                                   href="#account-address" role="tab" aria-controls="account-address"
                                   aria-selected="false">Addresses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-details-tab" data-toggle="tab"
                                   href="#account-details" role="tab" aria-controls="account-details"
                                   aria-selected="false">Account Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-logout-tab" href="{{ route('logout') }}" role="tab" aria-selected="false"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                            <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel"
                                 aria-labelledby="account-dashboard-tab">
                                <div class="myaccount-dashboard shoptopbar-heading">
                                   <h3>Dashboard :<b>{{$user->firstname}}</b>  {{$user->lastname}}</h3>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-4">
                                            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                                <div class="card-header">Orders</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">{{count($orders)}}</h5>
                                                    <p class="card-text">Orders Placed.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-4">
                                            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                                <div class="card-header">Orders (Approved)</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">{{count($orders->where('status','completed'))}}</h5>
                                                    <p class="card-text">Orders Approved.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-4">
                                            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                                <div class="card-header">Invoice</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">{{config('settings.currency_symbol' ).' '.$orders->where('status','!=','completed')->where('status','!=','declined')->map(function ($order){return $order->grand_total;})->sum()}}</h5>
                                                    <p class="card-text">Total Invoice.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-orders" role="tabpanel"
                                 aria-labelledby="account-orders-tab">
                                <div class="myaccount-orders">
                                    <h4 class="small-title">MY ORDERS</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                            <tr>
                                                <th>ORDER</th>
                                                <th>DATE</th>
                                                <th>STATUS</th>
                                                <th>PAYMENT</th>
                                                <th>TOTAL</th>
                                                <th>VIEW</th>
                                            </tr>
                                            @if(count($orders)>0)
                                                @foreach($orders as $order)
                                                    <tr>
                                                        <td><a class="account-order-id"
                                                               href="">{{$order->order_number}}</a></td>
                                                        <td>{{$order->created_at->Format('M d, Y')}}</td>
                                                        <td><span class="badge p-1 badge-{{($order->status=='completed')?'info':'warning'}}">{{$order->status}}</span></td>
                                                        <td><span class="badge p-1 badge-{{$order->payment_status?'info':'warning'}}">{{$order->payment_status?'Completed':'Not Completed'}}</span></td>
                                                        <td>{{config('settings.currency_symbol').' '.number_format($order->grand_total)}}</td>
                                                        <td><button class="fb-btn fb-btn_dark fb-btn_sm" data-toggle="modal" data-target="#exampleModalCenter{{$order->id}}"><span>View</span></button>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Ordered Items</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item bg-primary text-white">
                                                                            <div class="row">
                                                                                <div class="col-3">Thumbnail</div>
                                                                                <div class="col-3">Title</div>
                                                                                <div class="col-3">Qty</div>
                                                                                <div class="col-3">Price</div>
                                                                            </div>
                                                                        </li>
                                                                        @foreach($order->items as $key=> $orderItem)
                                                                            <li class="list-group-item">
                                                                                <div class="row">
                                                                                    <div class="col-3"><img width="90" height="100" src="{{asset($orderItem->product->media->first()->url)}}" alt="{{$orderItem->product->name}}"></div>
                                                                                    <div class="col-3">{{$orderItem->product->name}}</div>
                                                                                    <div class="col-3">{{$orderItem->quantity}}</div>
                                                                                    <div class="col-3">{{config('settings.currency_symbol').' '.$orderItem->price}}</div>
                                                                                </div>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                               <tr><td colspan="5">No Any Order Placed.</td></tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-address" role="tabpanel"
                                 aria-labelledby="account-address-tab">
                                <div class="myaccount-address">
                                    <p>The following addresses will be used on the checkout page by default.</p>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="small-title">BILLING ADDRESS</h4>
                                            <address>
                                                1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                            </address>
                                        </div>
                                        <div class="col">
                                            <h4 class="small-title">SHIPPING ADDRESS</h4>
                                            <address>
                                                1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-details" role="tabpanel"
                                 aria-labelledby="account-details-tab">
                                <h2>Submit the form to update the password.</h2>
                                <div class="myaccount-details">
                                    <form method="POST" action="{{ route('my-account.profile.update',['user'=>$user->id]) }}" class="fb-form">
                                        @csrf
                                        @method('put')
                                        <div class="fb-form-inner">
                                            <div class="single-input single-input-half">
                                                <label for="account-details-firstname">First Name*</label>
                                                <input  type="text" id="account-details-firstname" value="{{$user->firstname??''}}">
                                            </div>
                                            <div class="single-input single-input-half">
                                                <label for="account-details-lastname">Last Name*</label>
                                                <input  type="text" id="account-details-lastname" value="{{$user->lastname??''}}">
                                            </div>
                                            <div class="single-input">
                                                <label for="account-details-email">Email*</label>
                                                <input  type="email" id="account-details-email" value="{{$user->email??''}}">
                                            </div>
                                            <div class="single-input">
                                                <label for="password">{{ __('Password') }}</label>
                                                <input id="password" type="password" placeholder="Password" class="mb-0 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                @error('password')
                                                    <span class="text-danger">
                                                    <p>{{ $message }}</p>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="single-input">
                                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="mb-0 form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                            <div class="single-input">
                                                <button class="fb-btn fb-btn_dark"
                                                        type="submit"><span>SAVE CHANGES</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FB's Account Page Area End Here -->
    </main>
    <!-- FB's Page Content Area End Here -->
@endsection
