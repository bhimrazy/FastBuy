<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable=[
        'quantity','price','line_total','product_id','cart_id',
    ];
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
    public function product(){
        return $this->hasOne(Product::class);
    }
}
