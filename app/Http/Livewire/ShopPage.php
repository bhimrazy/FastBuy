<?php

namespace App\Http\Livewire;

use App\Brand;
use App\Product;
use App\Subcategory;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Collection;

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
    public $pdts = [];
    public $filter = [
        "category"=>"",
        "brand"=>"",
        "range-from" => "",
        "range-to" => "",
        "order_field" => "order_by_name_asc",
    ];
    public function mount(){
        $this->loadProducts();
    }

    public function loadProducts(){
        try {
            session()->flash("success", "Loading products ...");
            $query = [];
            $objects = Product::where($query);

            // Price Range 
            if(!empty($this->filter["range-from"]) && !empty($this->filter["range-to"])){
                $price_1 = $this->filter["range-from"];
                $price_2 = $this->filter["range-to"];

                $objects = $objects->whereBetween('price', [$price_1, $price_2]);
            }

            // Category
            if(!empty($this->filter["category"])){
                $objects = $objects->whereHas('category', function (Builder $query) {
                    $query->where('title', $this->filter["category"]);
                });
            }
             // Brand
             if(!empty($this->filter["brand"])){
                $objects = $objects->whereHas('brand', function (Builder $query) {
                    $query->where('title', $this->filter["brand"]);
                });
            }
            
            // Ordering
            $field = 'name';
            $type = 'asc';
            switch ($this->filter["order_field"]) {
                case 'order_by_name_asc':
                    $type = 'asc';
                    break;

                case 'order_by_name_desc':
                    $type = 'desc';
                    break;

                case 'order_by_price_low':
                    $field = 'price';
                    $type = 'asc';
                    break;

                case 'order_by_price_high':
                    $field = 'price';
                    $type = 'desc';
                    break;
            }

            $objects = $objects->orderBy($field, $type);
            
            $this->pdts = $objects->get()->toArray();
        } catch (Throwable $e) {
            session()->flash("error", "Something went wrong");
            $this->pdts = [];
        }
    }
    public function render()
    {   
        $product_ids = array_map(function($product) {
            // Produces a query on the author model
            return $product['id'];
        }, $this->pdts);
        $products=Product::whereIn('id', $product_ids)->with('media')->paginate(12);
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
