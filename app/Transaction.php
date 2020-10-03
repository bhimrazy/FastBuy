<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\In;

class Transaction extends Model
{
    protected $fillable=[
        'order_number','transaction_id','customer_name','transaction_amount','payment_status','payment_method','notes',
    ];
//    public function owner(){
//        return $this->belongsTo(User::class);
//    }
//    public function invoice(){
//        return $this->belongsTo(Invoice::class);
//    }
}
