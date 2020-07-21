<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable=[
        'title','slug',
    ];
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
    public function products()
    {
        return $this->hasManyThrough(
            'App\Product',
            'App\category',
            'category_id', // Foreign key on categories table...
            'subcategory_id', // Foreign key on products table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }

}
