<?php

namespace App\Http\Livewire;

use App\Brand;
use App\Product;
use App\Subcategory;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class ShopPage extends Component
{  use WithPagination;
    public $perPage=12;
    // protected $listeners = [
    //     'load-more' => 'loadMore'
    // ];

    // public function loadMore()
    // {
    //     $this->perPage = $this->perPage + 9;
    // }
    public $pdt = [];
    public $filter = [
        "category"=>"",
        "brand"=>"", 
        "min" => "",
        "max" => "",
        "sortBy" => "",
    ];
    public function mount(){
        $this->loadProducts();
    }

    public function loadProducts(){
        $products = new Product;
        // Category
        if(!empty($this->filter["category"])){
            $products = $products->whereHas('subcategory', function (Builder $query) {
                $query->where('title', $this->filter["category"]);
            });
        }
        // Brand
        if(!empty($this->filter["brand"])){
            $products = $products->whereHas('brand', function (Builder $query) {
                $query->where('title', $this->filter["brand"]);
            });
        }
    
        // Price Range 
        if(!empty($this->filter["min"]) && !empty($this->filter["max"])){
            $price_1 = $this->filter["min"];
            $price_2 = $this->filter["max"];

            $products = $products->whereBetween('price', [$price_1, $price_2]);
        }

        if($this->filter["sortBy"] !== null){
            switch ($this->filter["sortBy"]) {
                case 'sortByAZ':
                    $products = $products->orderBy('name', 'ASC');
                    break;
                case 'sortByZA':
                    $products = $products->orderBy('name', 'DESC');
                    break;
                case 'sortByLH':
                    $products = $products->orderBy('price', 'DESC');
                    break;
                case 'sortByHL':
                    $products =  $products->orderBy('price', 'ASC');
                break;	
                default:
                    $products =  $products->orderBy('name', 'ASC');
    
            }
        }
    
        if($this->filter["sortBy"] == null){
            $products = $products->orderBy('name', 'ASC');
        }
        $products=$products->with('media')->paginate(12);
        $this->reset('pdt');
        $this->pdt=$products->toArray();
    }
    public function resetFilters()
{
    $this->reset('filter');
}
    public function render()
    {   
        $products=Product::with('media')->paginate(12);
        $minPrice=Product::min('price');
        $maxPrice=Product::max('price');
        $categories=Subcategory::withCount('products')->get();
        // dd($products);
        $totalProducts=Product::all()->count();
        $brands=Brand::withCount('products')->get();
        return view('livewire.shop-page',compact(['categories','products','brands','totalProducts','minPrice','maxPrice']));
    }
}
