<?php

namespace App\Http\Livewire;

use App\Brand;
use App\Product;
use App\Subcategory;
use Livewire\Component;

class ShopPage extends Component
{
    public function render()
    {
        $categories=Subcategory::with(['products','products.media'])->get();
        $products=Product::with(['media'])->get();
        $brands=Brand::with(['products','products.media'])->get();
        return view('livewire.shop-page')->with('categories',$categories)
            ->with('products',$products)->with('brands',$brands);
            // ->with('baseUrl',url('/'));
        // return view('livewire.shop-page');
    }
}
