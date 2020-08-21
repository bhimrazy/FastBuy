<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Subcategory;
use App\Traits\pageMetaContent;
use Illuminate\Http\Request;

class ShopController extends Controller
{   use pageMetaContent;
    public function index(){
        $categories=Subcategory::with(['products','products.media'])->get();
        $products=Product::with(['media'])->get();
        $brands=Brand::with(['products','products.media'])->get();
        $this->setPageTitle('Shop | '.config('settings.site_title'), 'Manage Shop');
        return view('client.shop')->with('categories',$categories)
            ->with('products',$products)->with('brands',$brands)
            ->with('baseUrl',url('/'));
    }
}
