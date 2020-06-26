<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable=[
        'title','slug','url',
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
