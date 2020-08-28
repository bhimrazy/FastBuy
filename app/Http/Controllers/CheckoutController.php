<?php

namespace App\Http\Controllers;

use App\Address;
use App\Cart;
use App\Http\Requests\CheckoutRequest;
use App\Order;
use App\User;
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
        $user=User::findOrFail(auth()->id())->load(['billingAddress','shippingAddress']);
       // dd($user->billingAddress());
        return view('client.checkout')->with(['cartitems'=>$cart->items,'totalPrice'=>$cart->totalPrice,'user'=>$user]);
    }
    public function postCheckout(CheckoutRequest $request)
    { //dd($request->validated());
        if (!session()->has('cart')) {
            return view('client.checkout');
        }
        $user=\App\User::where('id',auth()->user()->id)->first();
        //dd($user);
        $user['mobile']= $request['shipping_phone'];
        $user->update();

        //dd($user->has('billingAddress') && $user->has('shippingAddress'));
        if($user->has('billingAddress') && $user->has('shippingAddress')){
            $user->billingAddress()->update([
                'address'=>$request['billing_address'],
                'city'=>$request['billing_city'],
                'state'=>$request['billing_state'],
                'post_code'=>$request['billing_post_code'],
                'country'=>$request['billing_country'],
            ]);
            $user->shippingAddress()->update([
                'address'=>$request['shipping_address'],
                'city'=>$request['shipping_city'],
                'state'=>$request['shipping_state'],
                'post_code'=>$request['shipping_post_code'],
                'country'=>$request['shipping_country'],
            ]);
        }else{
            Address::create([
                'billing_address'=>$user['id'],
                'address'=>$request['billing_address'],
                'city'=>$request['billing_city'],
                'state'=>$request['billing_state'],
                'post_code'=>$request['billing_post_code'],
                'country'=>$request['billing_country'],
            ]);
            Address::create([
                'shipping_address'=>$user['id'],
                'city'=>$request['shipping_city'],
                'state'=>$request['shipping_state'],
                'post_code'=>$request['shipping_post_code'],
                'country'=>$request['shipping_country'],
            ]);
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
