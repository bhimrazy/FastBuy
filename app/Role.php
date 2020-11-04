<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{use HasFactory;
    protected $fillable = [
        'title',
    ];
    public function admins()
    {
        return $this->belongsToMany(Admin::class);
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
