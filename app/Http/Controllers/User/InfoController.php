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
            ->select('producciones.cantidad', 'producciones.periodo')
            ->where('producciones.lote_id', '=', $id)
            ->get();

            //dd($infoproduccion);
        return view('usu.detalle')->withData($infoproduccion);
    }
}
