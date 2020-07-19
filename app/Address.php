<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=[
        'street_name','street_number','suburb',
        'city','state','posy_code','country'
    ];
}
