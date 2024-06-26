<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticable implements MustVerifyEmail
{
    use Notifiable;use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'email', 'password',
        'last_name','email_token','mobile_token','type',
        'mobile','verified_email','verified_mobile',
        'billing_address','shipping_address','avatar',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getFullName()
    {
        return $this->attributes['first_name'] .' '. $this->attributes['last_name'];
    }
    public function logs(){
        return $this->hasMany(LogHistory::class,'user_id','id');
    }
    public function customerOrders(){
        return $this->hasMany(Order::class);
    }
    public function customerPayments(){
        return $this->hasMany(Payment::class,'customer_id','id');
    }

    public function favourites(){
        return $this->belongsToMany(Product::class);
    }
    public function billingAddress(){
        return $this->hasOne(Address::class,'billing_address','id');
    }
    public function shippingAddress(){
        return $this->hasOne(Address::class,'shipping_address','id');
    }
//    public function cart(){
//        return $this->hasMany(Cart::class);
//    }
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
