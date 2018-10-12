<?php

namespace App;

use Illuminate\Notifications\Notifiable;

class Finca extends Model
{
    protected $fillable = [
        'nombre','descripcion','ubicacion','direccion',
    ];
  
    protected $hidden = [
        'user_id',
    ];

    public function cultivos(){
        return $this->hasMany('App\Cultivo');
    }
}