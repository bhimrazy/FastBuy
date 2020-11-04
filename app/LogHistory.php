<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_agent',
        'ip_address',
        'module',
        'action',
        'activity',
        'user_id',
        'admin_id',
        'reference_user',
        'reference_id',
        'reference_name',
        'type',
        'url',
        'request',
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }
}
