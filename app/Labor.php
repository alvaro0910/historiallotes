<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labor extends Model
{
    protected $fillable = [
        'nombre','descripcion',
    ];
  
    protected $hidden = [
        
    ];

    public function grupolabor(){
        return $this->belongTo('App\GrupoLabor');
    }
}
