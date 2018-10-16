<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $fillable = [
        'nombre','descripcion','ubicacion','direccion',
    ];
  
    protected $hidden = [
        'idUsuario',
    ];
    
    public function lotes(){
        return $this->belongToMany('App\Lote')->withPivot('cantidad', 'periodo')->withTimestamps();
    }
}
