<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable=['dni', 'nombre','tel1','tel2','domicilio','localidad_id','observaciones'];

public function localidad(){
    return $this->belongsTo('App\Localidad');
}

}