<?php

namespace App\Http\Controllers\Admin;

use App\cultivo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CultivoRequest;
use DB;

class CultivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fincas = DB::table('fincas')->get();
        $cultivos = DB::table('cultivos')->get();

        $fincacultivo = DB::select(
            'SELECT fincas.nombre, cultivos.cultivo, cultivo_finca.id
            FROM fincas
            INNER JOIN cultivos, cultivo_finca
            WHERE fincas.id = cultivo_finca.finca_id AND cultivos.id = cultivo_finca.cultivo_id;');

        $fincauser = DB::select(
            'SELECT fincas.nombre, fincas.municipio, finca_user.id, users.name
            FROM fincas
            INNER JOIN users, finca_user
            WHERE fincas.id = finca_user.finca_id AND users.id = finca_user.user_id;');

        return view('adm.indexfincacultivouser', ['collectionfincas' => $fincas, 'collectioncultivos' => $cultivos, 'collectionfincacultivo' => $fincacultivo, 'collectionfincauser' => $fincauser]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.cultivo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CultivoRequest $request)
    {
        $cultivo = new Cultivo($request->all());
        $cultivo->save();

        $notificacion = array(
            'message' => 'Cultivo agregado con exito.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cultivo = Cultivo::where('id', $id)->findOrFail($id);
        return view('adm.cultivo.show')->withData($cultivo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cultivo = Cultivo::where('id', $id)->findOrFail($id);
        return view('adm.cultivo.edit', ['data' => $cultivo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function update(CultivoRequest $request, $id)
    {
        $cultivo = Cultivo::where('id', $id)->findOrFail($id);
        
        $input = $request->all();
        $cultivo->update($input);

        $notificacion = array(
                'message' => 'Cultivo Actualizado Con Exito!',
                'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cultivo = Finca::where('id', $id)->findOrFail($id);
        $cultivo->delete();

        $notificacion = array(
            'message' => 'Cultivo Eliminado Con Exito.',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
