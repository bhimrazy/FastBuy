<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getProfile()
    {
        $orders=Auth::user()->customerOrders()->get();
        $orders->transform(function ($order,$key){
            $order->cart=unserialize($order->cart);
            return $order;
        });
        return view('client.my-account')->with('orders',$orders);
    }
}
