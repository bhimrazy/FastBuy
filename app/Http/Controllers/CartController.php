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

        if (!session()->has('cart')) {
            return view('client.cart');
        }
        $oldCart=session()->has('cart')?session('cart'):null;
        $cart=new Cart($oldCart);
        return view('client.cart')->with(['cart_items'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }
    public function store(CartRequest $request){
        //session()->flush();
        $product = Product::find($request->product_id);
        $oldCart=session()->has('cart')?session('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product,$product->id,$request->quantity);
        session()->put('cart',$cart);
        return redirect()->route('carts.index');
    }
    public function reduceByOne(Request $request){
        $oldCart=session()->has('cart')?session('cart'):null;
        $cart=new Cart($oldCart);
        $cart->reduceByOne($request->id);
        session()->put('cart',$cart);
        return response()->json(['success' => 'Cart Updated Successfully']);
        //return redirect()->route('carts.index');
    }
    public function increaseByOne(Request $request){
        $oldCart=session()->has('cart')?session('cart'):null;
        $cart=new Cart($oldCart);
        $cart->increaseByOne($request->id);
        session()->put('cart',$cart);
        return response()->json(['success' => 'Cart Updated Successfully']);
    }
    public function delete($id){
        $oldCart=session()->has('cart')?session('cart'):null;
        $cart=new Cart($oldCart);
        $cart->destroy($id);
        if($cart->items == null){
            session()->forget('cart');
        }
        else {
            session()->put('cart',$cart);
        }
        return redirect()->route('carts.index')->with('success','You successfully removed the product.');
    }
}
