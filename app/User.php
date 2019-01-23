<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','confirm_token','email_domain'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isUserConfirmed(){

        return $this->confirm_token == null;
    }

    public function confirmUser(){

           $this->confirm_token = null;
           $this->email_verified_at = $this->freshTimestamp();
           $this->save();

    }

    public function isAdminstrator(){

        return $this->admin;
    }

   

    public function makeAdminRequest(){

           $this->admin_request = str_random(25);
           $this->save();

    }

    public function hasAdminRequest(){

        return $this->admin_request == null;
    }

    public function makeAdmin(){

           $this->admin_request = null;
           $this->admin = true;
           $this->save();

    }
}
