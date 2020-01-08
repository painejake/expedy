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

    /**
     * Relationship for routes. Return the routes 
     * associated with a user.
     *
     * @return \App\Route
     * @since 1.0.0
     */
    public function routes()
    {
        return $this->hasMany('App\Route');
    }

    /**
     * Relationship for gpx routes. Return the gpx routes
     * associated with a user.
     *
     * @return \App\GpxRoute
     * @since 1.0.0
     */
    public function gpxDatas()
    {
        return $this->hasMany('App\GpxRoute');
    }

}
