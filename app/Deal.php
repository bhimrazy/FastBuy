<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable=[
        'end_at','discount','quantity',
    ];
    public function deals(){
        return $this->belongsToMany(Product::class);
    }
}
