<?php

namespace App\Http\Controllers\Admin;

use App\Finca;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FincaRequest;
use DB;

class FincaController extends Controller
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
        return view('adm.finca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FincaRequest $request)
    {
        $finca = new Finca($request->all());
        $finca->save();

        $notificacion = array(
            'message' => 'Finca agregada con exito.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $finca = Finca::where('id', $id)->findOrFail($id);
        return view('adm.finca.show')->withData($finca);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $finca = Finca::where('id', $id)->findOrFail($id);
        return view('adm.finca.edit', ['data' => $finca]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FincaRequest $request, $id)
    {
        $finca = Finca::where('id', $id)->findOrFail($id);
        
        $input = $request->all();
        $finca->update($input);

        $notificacion = array(
                'message' => 'Finca Actualizada Con Exito!',
                'alert-type' => 'success'
        );
        return redirect()->back()->with($notificacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finca = Finca::where('id', $id)->findOrFail($id);
        $finca->delete();

        $notificacion = array(
            'message' => 'Finca Eliminada Con Exito.',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
