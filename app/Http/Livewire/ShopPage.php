<?php

namespace App\Http\Livewire;

use App\Brand;
use App\Product;
use App\Subcategory;
use Livewire\Component;
use Livewire\WithPagination;

class ShopPage extends Component
{  use WithPagination;
    // public $perPage=12;
    // protected $listeners = [
    //     'load-more' => 'loadMore'
    // ];

    // public function loadMore()
    // {
    //     $this->perPage = $this->perPage + 9;
    // }
    public function render()
    {
        $categories=Subcategory::withCount('products')->get();
        $products=Product::with(['media'])->paginate(12);
        $totalProducts=Product::with(['media'])->count();
        $brands=Brand::withCount('products')->get();
        return view('livewire.shop-page',compact(['categories','products','brands','totalProducts']));
    }
}