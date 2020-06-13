<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'title','maincategory_id','slug',
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function maincategory(){
        return $this->belongsTo(Maincategory::class);
    }
}
