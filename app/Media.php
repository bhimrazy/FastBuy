<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{use HasFactory;
    protected $fillable=[
        'url','type','product_id',
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
