<?php

namespace App\Http\Controllers\Admin;

use App\Insumo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InsumoRequest;
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
        $lotes = DB::table('lotes')->get();
        $grupos = DB::table('grupos_labores')->get();
        return view('adm.insumo.create', ['listlotes' => $lotes, 'listgrupos' => $grupos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsumoRequest $request)
    {
        $insumo = new Insumo($request->all());
        $insumo->save();

        $notificacion = array(
            'message' => '¡Costo de insumo agregado con éxito!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
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
        $lotes = DB::table('lotes')->get();
        $grupos = DB::table('grupos_labores')->get();
        return view('adm.insumo.edit', ['data' => $insumo, 'listlotes' => $lotes, 'listgrupos' => $grupos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function update(InsumoRequest $request, $id)
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
        $notificacion = array(
            'message' => '¡No se puede eliminar el costo, está asociado a un lote!',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
