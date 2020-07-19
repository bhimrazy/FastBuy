<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $categories=Subcategory::with(['products','products.media'])->get();
        $products=Product::with(['media'])->get();
        $brands=Brand::with(['products','products.media'])->get();
        return view('client.shop')->with('categories',$categories)
            ->with('products',$products)->with('brands',$brands)
            ->with('baseUrl',url('/'));
    }
}
