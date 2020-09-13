<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=[
        'title','slug','status',
    ];
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
