<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoFisico extends Model
{
    protected $fillable = [
        'nombre','descripcion','ubicacion','direccion',
    ];
  
    protected $hidden = [
        'idUsuario',
    ];
    
    public function lote(){
        return $this->belongTo('App\Lote');
    }
}
