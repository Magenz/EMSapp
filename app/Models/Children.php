<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;
     //table name
     protected $table = 'children';
     //Primary key
     public $primaryKey = 'id';
     //timestamps
     public $timestamps = true;
 
     public function user(){
         return $this->belongsTo('App\Models\User');
     }
}
