<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    protected $fillable = [
        'nombre','descripcion','ubicacion','direccion',
    ];
  
    protected $hidden = [
        'idUsuario',
    ];

    public function finca(){
        return $this->belongsTo('App\Finca');
    }
}
