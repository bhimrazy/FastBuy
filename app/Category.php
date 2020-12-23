<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{use HasFactory,Auditable;
    protected $fillable=[
        'title','slug',
    ];
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class,);
    }
    public function products()
    {
        return $this->hasManyThrough(
            Product::class,
            Subcategory::class,
        );
    }

}
