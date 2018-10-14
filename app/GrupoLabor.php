<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoLabor extends Model
{
    protected $fillable = [
        'nombre', 'descripcion',
    ];
  
    protected $hidden = [
        
    ];
    
    public function labores(){
        return $this->hasMany('App\Labor');
    }

    public function lotes(){
        return $this->belongToMany('App\Lote')->withPivot('costo', 'periodo', 'cantidadmo')->withTimestamps();
    }
}
