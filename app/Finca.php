<?php

namespace App;

use Illuminate\Notifications\Notifiable;

class Finca extends Model
{
    protected $fillable = [
        'nombre','descripcion','ubicacion','direccion',
    ];
  
    protected $hidden = [
        'idUsuario',
    ];

    public function usuario(){
        return $this->belongsTo('App\User');
    }
}