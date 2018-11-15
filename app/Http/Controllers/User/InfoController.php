<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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
        $lotes = DB::table('lotes')
            ->join('cultivos', 'cultivos.id', '=', 'lotes.cultivo_id')
            ->join('fincas', 'fincas.id', '=', 'lotes.finca_id')
            ->select('cultivos.cultivo', 'lotes.codigo', 'lotes.nombre', 'lotes.id', 'fincas.nombre as name')
            ->get();
        return view('usu.info', ['data'=>$lotes]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $anio)
    {
        $infolote = DB::table('cultivos')
            ->join('lotes', 'cultivos.id', '=', 'lotes.cultivo_id')
            ->join('variedades', 'variedades.id', '=', 'lotes.variedad_id')
            ->select('cultivos.cultivo', 'lotes.*', 'variedades.variedad')
            ->where('lotes.id', '=', $id)
            ->get();
            
        $infoproduccion = DB::table('producciones')
            ->select('producciones.cantidad', 'producciones.periodo', 'producciones.lote_id')
            ->where('producciones.lote_id', '=', $id)
            ->whereYear('periodo', $anio)
            ->get()->toArray();
         
        $infopropiedades = DB::table('lote_propiedad')
            ->join('propiedades', 'propiedades.id', '=', 'lote_propiedad.propiedad_id')
            ->where('lote_propiedad.lote_id', '=', $id)
            ->get()->toArray();

        $sum = $this->sumarMeses($infoproduccion, $anio);
        $prom = $sum/($infolote['0']->area);     
        $otrosdatos = array($sum, $prom);
        
        return view('usu.detalle', ['infolote' => $infolote, 'produccionlote' => $infoproduccion, 'otrosdatoslote' => $otrosdatos, 'infopropiedades' => $infopropiedades ]);
    }

    function sumarMeses($infoproduccion, $anio){
        $sum = 0;
        foreach ($infoproduccion as $key) {
            $sum += $key->cantidad;
        }
        return $sum;
    }
}
