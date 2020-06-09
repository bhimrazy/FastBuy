<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable=[
        'url','type','product_id',
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
