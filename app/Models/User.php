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
    //post model relationship
    public function post(){
        return $this->hasMany('App\Models\Post');
    }
    //work experience model relationship
    
    public function workexperience(){
        return $this->hasMany('App\Models\Workexperience')->orderBy('dateFrom', 'desc');
    }
     //personal information model relationship
     public function personalinfo(){
        return $this->hasOne('App\Models\Personalinfo');
    }
    public function address(){
        return $this->hasOne('App\Models\Address');
    }
   
   
    
}       
