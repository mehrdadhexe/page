<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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


    public function Barg()
    {
        return $this->hasMany('App\Barg','F_BargID');
    }
    public function Like()
    {
        return $this->hasMany('App\Like','F_UserID');
    }

    public function Job()
    {
        return $this->hasOne('App\Job','F_JobID');
    }

    public function Zone()
    {
        return $this->hasOne('App\Zone','F_UserID');
    }

}
