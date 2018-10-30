<?php

namespace App\Http\Controllers\Admin;

use App\EstadoFisico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\RequestsEstadoFisicoRequest;
use DB;

class EstadoFisicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = DB::select(
            'SELECT estados_fisicos.id, estados_fisicos.descripcion, estados_fisicos.periodo, lotes.nombre
            FROM estados_fisicos
            INNER JOIN lotes
            WHERE lotes.id = estados_fisicos.lote_id;');
        return view('adm.estado.index', ['collection' => $estados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.estado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstadoFisicoRequest $request)
    {
        $estado = new EstadoFisico($request->all());
        $estado->save();

        $notificacion = array(
            'message' => 'Estado fisico agregado con exito.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EstadoFisico  $estadoFisico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estado = DB::select(
            "SELECT estados_fisicos.id, estados_fisicos.descripcion, estados_fisicos.periodo, estados_fisicos.created_at, estados_fisicos.updated_at, lotes.nombre
            FROM estados_fisicos
            INNER JOIN lotes
            WHERE lotes.id = estados_fisicos.lote_id AND estados_fisicos.id ='".$id."';");
        return view('adm.estado.show')->withData($estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EstadoFisico  $estadoFisico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estado = EstadoFisico::where('id', $id)->findOrFail($id);
        return view('adm.estado.edit', ['data' => $estado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstadoFisico  $estadoFisico
     * @return \Illuminate\Http\Response
     */
    public function update(EstadoFisicoRequest $request, $id)
    {
        $estado = EstadoFisico::where('id', $id)->findOrFail($id);
        
        $input = $request->all();
        $estado->update($input);

        $notificacion = array(
                'message' => 'Estado Fisico Actualizado Con Exito!',
                'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstadoFisico  $estadoFisico
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstadoFisico $estadoFisico)
    {
        $estado = EstadoFisico::where('id', $id)->findOrFail($id);
        $estado->delete();

        $notificacion = array(
            'message' => 'Estado Fisico Eliminado Con Exito.',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
