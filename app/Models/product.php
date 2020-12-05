<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
   protected $table = 'products';
   protected $fillable = ['name','price','photo','description','created_by'];
   //iliskili oldugu alnlar
    public function user(){
        return $this->hasMany('App\User','id','created_by');
    }
}
