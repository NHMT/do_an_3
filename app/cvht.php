<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class cvht extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ten_dn', 'password','hoten','email','sdt'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $table = 'cvht'; 
    protected $hidden = [
        'password',
    ];

    public function getAuthIdentifier() 
    { 
     return $this->getKey(); 
    } 


    public function getAuthPassword() 
    { 
     return $this->password; 
    } 
}
