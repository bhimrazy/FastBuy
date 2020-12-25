<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class SearchDropdown extends Component
{   public $search='';
    public $subcategory='';
    public function render()
    {
        $searchProducts=[];
        if(strlen($this->search)>2){
                $searchProducts=Product::with('media')
                // ->where(function ($query) {
                //     $query->when(!empty($this->subcategory), function ($query) {
                //         $query->whereHas('subcategory', function ($query) {
                //             $query->whereIn('id', $this->subcategory);
                //         })->orWhereDoesntHave('subcategory');
                //     });
                // })
                ->where('name','LIKE','%'.$this->search.'%')
                ->get();
        }
        return view('livewire.search-dropdown')->with('searchProducts',$searchProducts);
    }
}
