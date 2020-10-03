<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Requests\AdminRequest;
use App\Order;
use App\Product;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{   use AuthenticatesUsers;
    public function __construct()
    {
       $this->middleware('throttle:3,2')->only('authenticate');
       $this->middleware('auth:admin')->except('authenticate');
       $this->middleware('verified')->except('authenticate');
       //$this->middleware('password.confirm');
    }
    public function index(){
        $users=User::all()->where('type','customer');
        $latestUsers=User::where('type','customer')->latest()->take(8)->get();
        $products=Product::with('media')->latest()->get();
        $orders=Order::orderBy('status','desc')->latest()->get();
        $sales=Transaction::all()->pluck('transaction_amount')->sum();

        return view('admin.index',compact(['latestUsers','users','orders','products','sales']));
    }
//    public function authenticate(AdminRequest $request){
//        $credentials = $request->only('email', 'password');
//        if (Auth::attempt($credentials)) {
//            // Authentication passed...
//            return redirect()->route('admin.dashboard');
//        }
//        return $this->sendFailedLoginResponse($request);
//    }
    public function customers(){
        $users=User::with('customerOrders')->where('type','customer')->orderBy('created_at','desc')->get();
        return view('admin.customers.index')->with('users',$users);
    }
    public function showCustomers(User $customer){

        return view('admin.customers.show')->with('user',$customer);
    }

}
