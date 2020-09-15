<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('password.confirm')->only('updateProfile');
    }
    public function getProfile()
    {
        $user=Auth::user();
        $orders=$user->customerOrders()->latest()->with('items')->get();
//        $orders->transform(function ($order,$key){
//            $order->cart=unserialize($order->cart);
//            return $order;
//        });
        return view('client.my-account')->with('orders',$orders)->with('user',$user);
    }
    public function updateProfile(CustomerRequest $request, User $user)
    {
        $user->password=Hash::make($request->password);
        $user->setRememberToken(Str::random(60));
        $user->update();
        return redirect()->route('my-account')->with('success','Password Updated Successfully');
    }
}
