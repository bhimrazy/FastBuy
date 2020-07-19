<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable=[
        'user_id','status',
    ];
    public function items(){
        return $this->hasMany(InvoiceLine::class);
    }
    public function customer(){
        return $this->belongsTo(User::class);
    }
    public function transaction(){
        //return $this->belongsTo(User::class);
    }
}
