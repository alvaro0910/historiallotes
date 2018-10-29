<?php

namespace App\Http\Controllers\Admin;

use App\Insumo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumos = DB::select(
            'SELECT insumos.id, insumos.costo, insumos.periodo, grupos_labores.nombre AS nomlab, lotes.nombre
            FROM insumos
            INNER JOIN lotes, grupos_labores
            WHERE lotes.id = insumos.lote_id AND grupos_labores.id = insumos.grupo_labor_id;');
        return view('adm.insumo.index', ['collection' => $insumos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insumo = DB::select(
            "SELECT insumos.id, insumos.descripcion, insumos.costo, insumos.periodo, insumos.created_at, insumos.updated_at, lotes.nombre, grupos_labores.nombre AS nomlab
            FROM insumos
            INNER JOIN lotes, grupos_labores
            WHERE insumos.id ='".$id."';");
        return view('adm.insumo.show')->withData($insumo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insumo = Insumo::where('id', $id)->findOrFail($id);
        return view('adm.insumo.edit', ['data' => $insumo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $insumo = Insumo::where('id', $id)->findOrFail($id);
        
        $input = $request->all();
        $insumo->update($input);

        $notificacion = array(
                'message' => 'Costo Insumo Actualizado Con Exito!',
                'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $insumo = Insumo::where('id', $id)->findOrFail($id);
        $insumo->delete();

        $notificacion = array(
            'message' => 'Costo Insumo Eliminado Con Exito.',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
