<?php

namespace App;

use App\Notifications\AdminResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticable
{
    use Notifiable;use HasFactory;

    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password','avatar','is_super','type'
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
    public function isAdmin(){
        return $this->attributes['is_super']?true:false;
    }
    public function isVendor(){
        return $this->attributes['type']=='vendor'?true:false;
    }
    public function getFullName()
    {
        return $this->attributes['first_name'] .' '. $this->attributes['last_name'];
    }
    public function products(){
        return $this->hasMany(Product::class,'owner_id','id');
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->attributes['emailr'];
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }
}
