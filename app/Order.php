<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'total','tax','status','delivery','user_id','cart',
    ];
    public function customer(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function payment(){
        return $this->hasOne(Payment::class);
    }
//    public function cart(){
//        return $this->hasOne(Cart::class);
//    }
    public function total(){
        //TODO:find total
    }
}
