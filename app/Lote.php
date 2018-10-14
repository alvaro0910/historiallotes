<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $fillable = [
        'codigo', 'nombre', 'area', 'poblacion', 'edad', 'alturasnm',
    ];
  
    protected $hidden = [
        
    ];

    public function cultivo(){
        return $this->belongTo('App\Cultivo');
    }

    public function variedad(){
        return $this->belongTo('App\Variedad');
    }

    public function estadosFisicos(){
        return $this->hasMany('App\EstadoFisico');
    }

    public function producciones(){
        return $this->hasMany('App\Produccion');
    }

    public function propiedades(){
        return $this->hasMany('App\Propiedad');
    }

    public function insumos(){
        return $this->belongToMany('App\Insumo')->withPivot('costo', 'periodo')->withTimestamps();
    }

    public function gruposLabores(){
        return $this->belongToMany('App\GrupoLabor')->withPivot('costo', 'periodo', 'cantidadmo')->withTimestamps();
    }
}
