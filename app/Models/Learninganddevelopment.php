<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learninganddevelopment extends Model
{
    use HasFactory;
     //table name
     protected $table = 'learninganddevelopment';
     //Primary key
     public $primaryKey = 'id';
     //timestamps
     public $timestamps = true;
 
     public function user(){
         return $this->belongsTo('App\Models\User');
     }
}
