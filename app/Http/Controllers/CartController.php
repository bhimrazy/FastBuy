<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartItem;
use App\Http\Requests\CartRequest;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){

        if (session()->has('cart')) {
            $cart = session('cart');
            $cartitems=CartItem::where('cart_id',$cart->id)->get();
            return view('client.cart')->with('cartitems', $cartitems);
        }
        return view('client.cart');
    }
    public function store(CartRequest $request){
        //session()->flush();
        $product = Product::findOrFail($request->product_id);
        //$cartitems = []
        if (session()->has('cart') ) {
            $cart = session('cart');
            $duplicate=CartItem::where(['product_id'=>$request->product_id,'cart_id'=>$cart->id])->get();
            if($duplicate->isEmpty()){
                CartItem::create([
                    'quantity'=>$request->quantity,
                    'price'=>$product->price,
                    'line_total'=>$request->quantity*$product->price,
                    'product_id'=>$product->id,
                    'cart_id'=>$cart->id,
                ]);
            }
            else{
                return redirect()->back();
            }

        }
        else{
            $cart = Cart::create([
                'user_id'=>'1000',
            ]);
            $cartitem=CartItem::create([
                'quantity'=>$request->quantity,
                'price'=>$product->price,
                'line_total'=>$request->quantity*$product->price,
                'product_id'=>$product->id,
                'cart_id'=>$cart->id,
            ]);
            session(['cart' => $cart]);
           // array_push()
        }
        return redirect()->route('carts.index');
    }
    public function show($id)
    {

        return redirect()->back();
    }
    public function destroy($id)
    {   //dd($id);
        CartItem::findOrFail($id)->delete();
        return redirect()->back();
    }
}
