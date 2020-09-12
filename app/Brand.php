<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Brand extends Model
{
    protected $fillable=[
        'title','slug','url','status',
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($this->attributes['title']);
    }
}
