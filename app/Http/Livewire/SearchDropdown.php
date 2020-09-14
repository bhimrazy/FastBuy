<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class SearchDropdown extends Component
{   public $search='';
    public function render()
    {
        $searchProducts=[];
        if(strlen($this->search)>2){
            $searchProducts=Product::where('name','LIKE','%'.$this->search.'%')
                ->get();

        }
        return view('livewire.search-dropdown')->with('searchProducts',$searchProducts);
    }
}
