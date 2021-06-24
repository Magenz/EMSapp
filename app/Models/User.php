<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function hobby()
    {
        return $this->hasMany(hobby::class);
    }
    public function post(){
        return $this->hasMany('App\Models\Post');
    }
    public function getPersonalInformation()
    {
        return $this->hasOne('App\Models\personal_information');
    }
    
}       
