<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $fillable = [
        'codigo', 'nombre', 'area', 'poblacion', 'edad', 'alturasnm', 'cultivo_id', 'variedad_id',
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

    public function insumos(){
        return $this->hasMany('App\Insumo');
    }

    public function labores(){
        return $this->hasMany('App\Labor');
    }

    public function propiedades(){
        return $this->belongToMany('App\Propiedad')->withPivot('cantidad', 'periodo')->withTimestamps();
    }
}
