<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable=[
        'name','description','price','discount','likes','user_id','subcategory_id','product_type','stock',
        'slug','rating','brand_id','attributes','status','featured','quantity','sku',
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function setFeaturedAttribute($value)
    {
        $this->attributes['featured'] = $value=='on'?1:0;
    }
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value=='on'?1:0;
    }
    public function setStockAttribute($value)
    {
        $this->attributes['stock'] = $value=='on'?1:0;
    }
    public function getStockAttribute($value)
    {
        return $this->attributes['stock']?'In Stock':'OutOf Stock';
    }
    public function getStatusAttribute($value)
    {
        return $this->attributes['status']?'Active':'In Active';
    }
    public function getFeaturedAttribute($value)
    {
        return $this->attributes['featured']?'Featured':'Not Featured';
    }
    public function owner(){
        return $this->belongsTo(User::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function cartItem(){
        return $this->hasMany(CartItem::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function media(){
        return $this->hasMany(Media::class);
    }
    public function deals(){
        return $this->belongsToMany(Deal::class);
    }
    public function favouriteUsers(){
        return $this->belongsToMany(User::class);
    }
}
