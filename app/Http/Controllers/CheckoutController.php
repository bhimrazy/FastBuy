<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getCheckout()
    {
        if (!session()->has('cart')) {
            return view('client.checkout');
        }
        $oldCart=session()->has('cart')?session('cart'):null;
        $cart=new Cart($oldCart);
        return view('client.checkout')->with(['cartitems'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }
    public function postCheckout(Request $request)
    {
        if (!session()->has('cart')) {
            return view('client.checkout');
        }
        $oldCart=session()->has('cart')?session('cart'):null;
        $cart=new Cart($oldCart);
        if($request->payment_method=="Cash On Delivery"){
            session()->forget('cart');
            $order=new Order();
            $order->total= $cart->totalPrice;
            $order->cart= serialize($cart);
            Auth::user()->customerOrders()->save($order);
            return redirect()->route('my-account')->with('success','Order Placed');

        }
        else{
            return redirect()->back();
        }

    }
}
