<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vfi extends Model
{
     // Table Name
     protected $table = 'v_fis';
     // Primary Key
     public $primaryKey = 'id';
     // Timestamps
     public $timestamps = true;
 
     protected $casts = ['status' => 'boolean'];

     protected $fillable = ['status'];
     /*public function user(){
         return $this->belongsTo('App\User');
     }*/
}
