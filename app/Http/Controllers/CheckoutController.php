<?php

namespace App\Http\Controllers;

use App\Address;
use App\Cart;
use App\Contracts\OrderContract;
use App\Http\Requests\CheckoutRequest;
use App\Order;
use App\Transaction;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    protected $orderRepository;
    public function __construct(OrderContract $orderRepository)
    {
        $this->middleware('auth');
        $this->orderRepository = $orderRepository;
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
    {   $request = $request->validated();
        //dd($request);
        if (!session()->has('cart')) {
            return view('client.checkout');
        }
        $user=\App\User::where('id',auth()->user()->id)->first();
        //dd($user);
        $user['mobile']= $request['shipping_phone'];
        $user->update();

        if($user->billingAddress !=null && $user->shippingAddress !=null){
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
//        $oldCart=session()->has('cart')?session('cart'):null;
//        $cart=new Cart($oldCart);
        if($request['payment_method']=="Cash On Delivery"){
            $order = $this->orderRepository->storeOrderDetails($request);
            session()->forget('cart');
            $order->status = 'processing';
            $order->delivery = 'pending';
            $order->transaction_id='COD-'.strtoupper(Str::random(8));
            $order->payment_method='COD';
            $order->save();
            Auth::user()->customerOrders()->save($order);
            Transaction::create([
                'order_number'=>$order['order_number'],
                'transaction_id'=>$order['transaction_id'],
                'customer_name'=>$order['first_name'].' '.$order['last_name'],
                'transaction_amount'=>$order['grand_total'],
                'payment_method'=>$order->payment_method,
            ]);
            Auth::user()->customerOrders()->save($order);
            return redirect()->route('my-account')->with('success','Order Placed');

        }
        elseif ($request['payment_method']=="eSewa"){
            //dd($request);
            $order = $this->orderRepository->storeOrderDetails($request);
            session()->forget('cart');
//            $order=new Order();
//            $order->total= $cart->totalPrice;
//            $order->cart= serialize($cart);
            return view('client.esewa.checkout')->with('order',$order);
        }
        elseif ($request['payment_method']=="fonepay"){
            //dd($request);
            $order = $this->orderRepository->storeOrderDetails($request);
            session()->forget('cart');
            $fonepay =[];
            $fonepay['RU'] = route('fonepay.return');
            $fonepay['PID'] = 'NBQM';
            $fonepay['PRN'] = $order->order_number;
            $fonepay['AMT'] = $order->grand_total;
            $fonepay['CRN'] = 'NPR';
            $fonepay['DT'] = date('m/d/Y');
            $fonepay['R1'] = 'test';
            $fonepay['R2'] = 'letslearntogether';
            $fonepay['MD'] = 'P';

            $data = $fonepay['PID'] .','.
                $fonepay['MD'] .','.
                $fonepay['PRN'] .','.
                $fonepay['AMT'] .','.
                $fonepay['CRN'] .','.
                $fonepay['DT'] .','.
                $fonepay['R1'] .','.
                $fonepay['R2'] .',' .
                $fonepay['RU'];

            $fonepay['DV'] = hash_hmac('sha512', $data, 'a7e3512f5032480a83137793cb2021dc');
            return view('client.fonepay.checkout',compact( 'order', 'fonepay'));
        }
        else{
            return redirect()->back();
        }

    }
}
