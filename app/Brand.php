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
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
//    public function getUrlAttribute()
//    {
//        return 'storage'.$this->attributes['url'];
//    }
}
