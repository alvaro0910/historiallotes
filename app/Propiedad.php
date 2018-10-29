<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    public $table = "propiedades";

    protected $fillable = [
        'material','unidad',
    ];
    
    public function lotes(){
        return $this->belongToMany('App\Lote')->withPivot('cantidad', 'periodo')->withTimestamps();
    }
}
