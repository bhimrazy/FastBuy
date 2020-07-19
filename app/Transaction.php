<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\In;

class Transaction extends Model
{
    protected $fillable=[
        'user_id','invoice_id','status',
    ];
    public function owner(){
        return $this->belongsTo(User::class);
    }
    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
