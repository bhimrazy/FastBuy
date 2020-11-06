<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{use HasFactory;
    protected $fillable=[
        'title','slug','status',
    ];
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
