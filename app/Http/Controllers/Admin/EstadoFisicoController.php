<?php

namespace App\Http\Controllers\Admin;

use App\EstadoFisico;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EstadoFisicoRequest;
use DB;
use Carbon\Carbon;

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
        $lotes = DB::table('lotes')->get();
        return view('adm.estado.create')->withData($lotes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstadoFisicoRequest $request)
    {
        $fecha = Carbon::parse($request->periodo);
        $afecha = $fecha->year;
        
        $request["periodo"] = $afecha."-01"."-01";

        $hoy = date("Y-m-d");
        $fechaFormulario = $request->periodo;

        if ($hoy <= $fechaFormulario) {
            $estado = new EstadoFisico($request->all());
            $estado->save();

            $notificacion = array(
                'message' => 'Estado físico agregado con éxito.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notificacion);
        }
        else {
            $notificacion = array(
                'message' => 'La fecha debe ser menor a la actual.',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notificacion);
        }
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
        $lotes = DB::table('lotes')->get();
        return view('adm.estado.edit', ['data' => $estado, 'lotes' => $lotes]);
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
                'message' => 'Estado físico actualizado con éxito!',
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
    public function destroy($id)
    {
        $notificacion = array(
            'message' => '¡No se puede eliminar el estado, está asociado a un lote!',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
