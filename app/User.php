<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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

    // mutator formats data as it gets saved
    public function setEmailAttribute($value) {
        $this->attributes['email'] = strtolower($value);
    }

    // accessor formats data as we retrieve 
    public function getEmailAttribute($value) {
        return strtoupper($value);
    }

}
