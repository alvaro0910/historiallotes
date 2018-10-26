<?php

namespace App\Http\Controllers\Admin;

use App\Lote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotes = DB::select(
            'SELECT lotes.id, lotes.codigo, lotes.nombre, cultivos.cultivo
            FROM lotes
            INNER JOIN cultivos
            WHERE cultivos.id = lotes.cultivo_id;');
        return view('adm.lote.index', ['collection' => $lotes]);
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
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$lote = Lote::where('id', $id)->findOrFail($id);
        $lotes = DB::select(
            "SELECT lotes.id, lotes.codigo, lotes.nombre, lotes.area, lotes.poblacion, lotes.edad, lotes.alturasnm, lotes.created_at, lotes.updated_at, cultivos.cultivo, variedades.variedad
            FROM lotes
            INNER JOIN cultivos, variedades
            WHERE cultivos.id = lotes.cultivo_id AND variedades.id = lotes.variedad_id AND lotes.id ='".$id."';");
        return view('adm.lote.show')->withData($lotes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lote = Lote::where('id', $id)->findOrFail($id);
        return view('adm.lote.edit', ['data' => $lote]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lote = Lote::where('id', $id)->findOrFail($id);
        
        $input = $request->all();
        $lote->update($input);

        $notificacion = array(
                'message' => 'Lote Actualizado Con Exito!',
                'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lote = Lote::where('id', $id)->findOrFail($id);
        $lote->delete();

        $notificacion = array(
            'message' => 'Lote Eliminado Con Exito.',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
