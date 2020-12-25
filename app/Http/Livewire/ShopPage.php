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
    public $min="";
    public $max="";
    public $sortBy="";
    public $selectedCategories = [];
    public $selectedBrands = [];
    
    public function getMethod(){
        if($this->sortBy !== null){
                switch ($this->sortBy) {
                    case 'sortByAZ':
                        return ['name', 'ASC'];
                        break;
                    case 'sortByZA':
                        return ['name', 'DESC'];
                        break;
                    case 'sortByLH':
                        return ['price', 'ASC'];
                        break;
                    case 'sortByHL':
                        return ['price', 'DESC'];
                    break;	
                    default:
                        return ['name', 'DESC'];
        
                }
            }else{
                return ['name', 'DESC'];
            }
    }
   
    public function render()
    {   
        $method=$this->getMethod();
        $products = Product::with('media')
            ->where(function ($query) {
                $query->when(!empty($this->selectedCategories), function ($query) {
                    $query->whereHas('subcategory', function ($query) {
                        $query->whereIn('id', $this->selectedCategories);
                    })->orWhereDoesntHave('subcategory');
                });
            })
            ->where(function ($query) {
                $query->when(!empty($this->selectedBrands), function ($query) {
                    $query->whereHas('brand', function ($query) {
                        $query->whereIn('id', $this->selectedBrands);
                    })->orWhereDoesntHave('brand');
                });
            })
            ->orderBy($method[0],$method[1])
            ->where(function ($query) {
                $query->when(!empty($this->min) && !empty($this->max), function ($query) {
                    $query->whereBetween('price', [$this->min, $this->max]);
                });
            })
            ->paginate(9);
            
        $minPrice=Product::min('price');
        $maxPrice=Product::max('price');
        $categories=Subcategory::withCount('products')->get();
        // dd($products);
        $totalProducts=Product::all()->count();
        $brands=Brand::withCount('products')->get();
        return view('livewire.shop-page',compact(['categories','products','brands','totalProducts','minPrice','maxPrice']));
    }
}
