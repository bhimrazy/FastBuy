<?php


namespace App;


class Cart
{
    public $items=null;
    public $totalQty=0;
    public $totalPrice=0;

    public function __construct($oldCart)
    {
       if ($oldCart){
           $this->items = $oldCart->items;
           $this->totalQty = $oldCart->totalQty;
           $this->totalPrice = $oldCart->totalPrice;
       }
    }
    public function add($item,$id,$qty){
        $storedItem=['qty'=>'','price'=>$item->price,'item'=>$item];
        if($this->items){
            if (array_key_exists($id,$this->items)){
                $storedItem=$this->items[$id];
                return redirect()->back()->with('danger','This Item Already Exists');
            }
        }
        $storedItem['qty']=$qty;
        $storedItem['price']=$item->price*$storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty=count($this->items);
        $this->totalPrice+=$storedItem['price'];
    }
    public function reduceByOne($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] = $this->items[$id]['item']->price * $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['item']->price;
        if($this->items[$id]['qty'] <= 0) {
            unset($this->items[$id]);
        }
    }
    public function increaseByOne($id){
        if($this->items[$id]['qty'] > 0) {
            $this->items[$id]['qty']++;
            $this->items[$id]['price'] = $this->items[$id]['item']->price * $this->items[$id]['qty'];
            $this->totalPrice += $this->items[$id]['item']->price;
        }
    }
    public function destroy($id){
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
        $this->totalQty=count($this->items);
    }
}
