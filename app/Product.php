<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'title','description','price','discount','likes','user_id','category_id',
    ];
    public function owner(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
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
