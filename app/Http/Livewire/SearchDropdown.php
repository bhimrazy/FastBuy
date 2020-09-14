<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class SearchDropdown extends Component
{   public $search='';
    //public $categoryId='';
    public function render()
    {
        $searchProducts=[];
        if(strlen($this->search)>2){
//            if($this->categoryId!=null){
//            $searchProducts=Product::where('subcategory_id',$this->categoryId)
//                    ->where('name','LIKE','%'.$this->search.'%')
//                    ->with('media')->get();
//            }
//            else{
                $searchProducts=Product::where('name','LIKE','%'.$this->search.'%')
                    ->get();
            //}
        }
        return view('livewire.search-dropdown')->with('searchProducts',$searchProducts);
    }
}
