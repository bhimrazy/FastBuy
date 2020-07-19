<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=[
        'title','description','rating','user_id','product_id',
    ];
    public function owner(){
        return $this->belongsTo(User::class);
    }
    public function product(){
        return $this->belongsTo(User::class);
    }
}
