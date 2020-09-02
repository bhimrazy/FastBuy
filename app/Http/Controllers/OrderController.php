<?php

namespace App\Http\Controllers;

use App\Order;
use App\Traits\pageMetaContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{   use pageMetaContent;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        abort_if(Gate::denies('order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle('List Orders','This Page Lists all the orders.');
        $orders=Order::with(['customer','items'])->latest()->get();
        return view('admin.orders.index')->with('orders',$orders);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Order $order)
    {
        abort_if(Gate::denies('order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $order->load('items');
        $this->setPageTitle($order['order_number'].'| Show Order','This Page shows the order with Order Number:'.$order['order_number']);
        return view('admin.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        //
    }
}
