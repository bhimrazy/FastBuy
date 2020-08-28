<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number', 'user_id', 'status', 'grand_total', 'item_count', 'payment_status', 'payment_method',
        'first_name', 'last_name', 'address', 'city', 'country', 'post_code', 'phone_number', 'notes'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function customer(){
        return $this->belongsTo(User::class,'user_id','id');
    }

//    protected $fillable=[
//        'total','tax','status','delivery','user_id','cart',
//    ];
//    public function payment(){
//        return $this->hasOne(Payment::class);
//    }
//    public function cart(){
//        return $this->hasOne(Cart::class);
//    }
    public function total(){
        //TODO:find total
    }
}
