<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{ use HasFactory;
    protected $fillable=[
        'street_name','address',
        'city','state','post_code','country','billing_address','shipping_address'
    ];

}
