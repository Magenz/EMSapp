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
    //eligibility
    public function eligibility(){
        return $this->hasMany('App\Models\Eligibility');
    }
     //education
     public function education(){
        return $this->hasMany('App\Models\Education');
    }
    //education
    public function learninganddevelopment(){
        return $this->hasMany('App\Models\Learninganddevelopment');
    }
     //personal information model relationship
     public function personalinfo(){
        return $this->hasOne('App\Models\Personalinfo');
    }
    //address
    public function address(){
        return $this->hasOne('App\Models\Address');
    }
   
   
    
}       
