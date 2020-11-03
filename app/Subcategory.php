<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{use HasFactory;
    protected $fillable=[
        'title','category_id','slug',
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
