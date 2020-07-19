<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=[
        'order_id','customer_id','amount','status','ref_number','transaction_status',
    ];
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
    public function customer(){
        return $this->belongsTo(User::class,'customer_id','id');
    }
}
