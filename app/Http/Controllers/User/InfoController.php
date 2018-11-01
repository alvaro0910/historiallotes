<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotes = DB::table('cultivos')
            ->join('lotes', 'cultivos.id', '=', 'lotes.cultivo_id')
            ->select('cultivos.cultivo', 'lotes.codigo', 'lotes.nombre', 'lotes.id' )
            ->get();
        return view('usu.info');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infolote = DB::table('cultivos')
            ->join('lotes', 'cultivos.id', '=', 'lotes.cultivo_id')
            ->join('variedades', 'variedades.id', '=', 'lotes.variedad_id')
            //->join('producciones', 'lotes.id', '=', 'producciones.lote_id')
            //->join('lote_propiedad', 'lotes.id', '=', 'lote_propiedad.lote_id')
            //->join('propiedades', 'propiedades.id', '=', 'lote_propiedad.propiedad_id')
            //->join('estados_fisicos', 'lotes.id', '=', 'estados_fisicos.lote_id')
            ->select('cultivos.cultivo', 'lotes.*', 'variedades.variedad')
            ->where('lotes.id', '=', $id)
            //->where([['lotes.id', '=', $id], ['producciones.periodo', '=', "2008-01-31"],])
            //->take(1)
            ->get();
            
            $infoproduccion = DB::table('producciones')
                ->select('producciones.cantidad', 'producciones.periodo', 'producciones.lote_id')
                ->where('producciones.lote_id', '=', $id)
                ->get()->toArray();

            $arrayinfo = array($this->sumarMeses($infoproduccion));
            dd($arrayinfo);
        return view('usu.detalle')->withData($infoproduccion);
    }

    function sumarMeses($infoproduccion){
        $sum=0;
        $pila = array();
        foreach ($infoproduccion as $key) {
            $p = $key->periodo;
            $l = $key->lote_id;
            if (strpos($p, '2008') !== false && strpos($l, '1') !== false) {
                $sum += $key->cantidad;
            }
        }
        array_push($pila, "manzana", "arándano");
        array_push($arrData["data"], array(
            "lote" => $row["2005"],
            "value" => $row["1234"]
        )); 
        $array[] = $t->id;
        dd($sum);
        

        
    }
}
