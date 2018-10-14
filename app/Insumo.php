<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $fillable = [
        'nombre', 'descripcion',
    ];
  
    protected $hidden = [
        
    ];

    public function lotes(){
        return $this->belongToMany('App\Lote')->withPivot('costo', 'periodo')->withTimestamps();
    }
}
