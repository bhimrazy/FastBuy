<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Requests\AdminRequest;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{   use AuthenticatesUsers;
    public function __construct()
    {
       $this->middleware('throttle:3,2')->only('authenticate');
       $this->middleware('auth')->except('authenticate');
       $this->middleware('admin')->except('authenticate');
       $this->middleware('verified')->except('authenticate');
       //$this->middleware('password.confirm');
    }
    public function index(){
        $users=User::all()->where('type','customer');
        $products=Product::orderBy('created_at','desc')->get();
        $orders=Order::orderBy('status','desc')->orderBy('created_at','desc')->get();
        return view('admin.index')->with('users',$users)->with('orders',$orders)->with('products',$products);
    }
    public function authenticate(AdminRequest $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('admin.dashboard');
        }
        return $this->sendFailedLoginResponse($request);
    }
    public function orders(){
        $orders=Order::orderBy('status','desc')->orderBy('created_at','desc')->with('customer')->paginate(10);
        return view('admin.orders.index')->with('orders',$orders);
    }
    public function customers(){
        $users=User::with('customerOrders')->where('type','customer')->orderBy('created_at','desc')->paginate(10);
        return view('admin.customers.index')->with('users',$users);
    }
    public function brands(){
        $brands=Brand::with('products')->orderBy('created_at','desc')->paginate(10);
        return view('admin.brands.index')->with('brands',$brands);
    }

}