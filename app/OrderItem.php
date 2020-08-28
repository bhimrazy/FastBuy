<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id', 'product_id', 'quantity', 'price'
    ];
    public function getPriceAttribute($value)
    {
        return number_format($this->attributes['price']);
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
