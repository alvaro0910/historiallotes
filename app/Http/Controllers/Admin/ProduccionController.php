<?php

namespace App\Http\Controllers\Admin;

use App\Produccion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProduccionRequest;
use DB;

class ProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produccionlote = DB::select(
            'SELECT lotes.nombre, lotes.area, producciones.id, producciones.cantidad, producciones.periodo
            FROM lotes
            INNER JOIN producciones
            WHERE lotes.id = producciones.lote_id;');

        return view('adm.produccion.index', ['collection' => $produccionlote]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.produccion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProduccionRequest $request)
    {
        $produccion = new Produccion($request->all());
        $produccion->save();

        $notificacion = array(
            'message' => 'Produccion agregada con exito.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produccion  $produccion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produccion = DB::select(
            "SELECT lotes.nombre, lotes.area, producciones.cantidad, producciones.id, producciones.periodo, producciones.created_at, producciones.updated_at
            FROM producciones
            INNER JOIN lotes
            WHERE producciones.id ='".$id."';");
        return view('adm.produccion.show')->withData($produccion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produccion  $produccion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produccion = Produccion::where('id', $id)->findOrFail($id);
        return view('adm.produccion.edit', ['data' => $produccion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produccion  $produccion
     * @return \Illuminate\Http\Response
     */
    public function update(ProduccionRequest $request, $id)
    {
        $produccion = Produccion::where('id', $id)->findOrFail($id);
        
        $input = $request->all();
        $produccion->update($input);

        $notificacion = array(
                'message' => 'Produccion Actualizada Con Exito!',
                'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produccion  $produccion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produccion = Produccion::where('id', $id)->findOrFail($id);
        $produccion->delete();

        $notificacion = array(
            'message' => 'Produccion Eliminado Con Exito.',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
