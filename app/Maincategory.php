<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maincategory extends Model
{
    protected $fillable=[
        'title','slug',
    ];

    public function productcategories()
    {
        return $this->hasMany(Category::class,'maincategory_id','id');
    }
    public function products()
    {
        return $this->hasManyThrough(
            'App\Product',
            'App\category',
            'maincategory_id', // Foreign key on categories table...
            'category_id', // Foreign key on products table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }

}
