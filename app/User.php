<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image','email','telephone','address','account_status','password','role',
    ];


    protected $attributes = [
        'role' => 2,
        'account_status' => "Please give account access",
        // them de push thoi
    ];

    public const ADMIN_ROLE = 1;
    public const USER_ROLE = 0;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function getImage(){
        if(is_null($this->__get("image"))){
            return asset("media/default.jpg");
        }
        return asset($this->__get("image"));
    }
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
}
