<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';

    protected $fillable = [
        'codigo', 'municipio', 'departamento_id',
    ];

    public function departamento(){
        return $this->belongTo('App\Departamento');
    }

    public static function municipios($id){
        return Municipio::where('departamento_id', '=', $id)->get(); 
    }
}
