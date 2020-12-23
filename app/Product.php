<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{use HasFactory;
    protected $fillable=[
        'name','description','price','discount','likes','owner_id','subcategory_id','product_type','stock',
        'slug','rating','brand_id','attributes','status','featured','quantity','sku',
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function setFeaturedAttribute($value)
    {
        $this->attributes['featured'] = $value?1:0;
    }
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value?1:0;
    }
    public function setStockAttribute($value)
    {
        $this->attributes['stock'] = $value?1:0;
    }
    public function getStockAttribute()
    {
        return $this->attributes['stock']?'In Stock':'OutOf Stock';
    }
    public function getStatusAttribute()
    {
        return $this->attributes['status']?'Active':'In Active';
    }
    public function getFeaturedAttribute()
    {
        return $this->attributes['featured']?'Featured':'Not Featured';
    }
    public function owner(){
        return $this->belongsTo(Admin::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
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
