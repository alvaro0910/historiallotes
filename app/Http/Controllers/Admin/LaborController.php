<?php

namespace App\Http\Controllers\Admin;

use App\Labor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LaborRequest;
use DB;

class LaborController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labores = DB::select(
            'SELECT labores.id, labores.costo, labores.periodo, grupos_labores.nombre AS nomlab, lotes.nombre
            FROM labores
            INNER JOIN lotes, grupos_labores
            WHERE lotes.id = labores.lote_id AND grupos_labores.id = labores.grupo_labor_id;');
        return view('adm.labor.index', ['collection' => $labores]);
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
        return view('adm.labor.create', ['listlotes' => $lotes, 'listgrupos' => $grupos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaborRequest $request)
    {
        $labor = new Labor($request->all());
        $labor->save();

        $notificacion = array(
            'message' => 'Costo labor agregada con exito.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Labor  $labor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $labor = DB::select(
            "SELECT labores.id, labores.descripcion, labores.costo, labores.periodo, labores.cantidadmo, labores.created_at, labores.updated_at, lotes.nombre, grupos_labores.nombre AS nomlab
            FROM labores
            INNER JOIN lotes, grupos_labores
            WHERE labores.id ='".$id."';");
        return view('adm.labor.show')->withData($labor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Labor  $labor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $labor = Labor::where('id', $id)->findOrFail($id);
        return view('adm.labor.edit', ['data' => $labor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Labor  $labor
     * @return \Illuminate\Http\Response
     */
    public function update(LaborRequest $request, $id)
    {
        $labor = Labor::where('id', $id)->findOrFail($id);
        
        $input = $request->all();
        $labor->update($input);

        $notificacion = array(
                'message' => 'Costo labor Actualizado Con Exito!',
                'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Labor  $labor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $labor = Labor::where('id', $id)->findOrFail($id);
        $labor->delete();

        $notificacion = array(
            'message' => 'Costo Labor Eliminado Con Exito.',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
