<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    //
    protected $fillable=['nombre'];


public function clientes(){
    return $this->hasMany('App\Cliente');
}

}