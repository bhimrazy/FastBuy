<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    protected $fillable=[
        'discount','code','end_at','status',
    ];
}
