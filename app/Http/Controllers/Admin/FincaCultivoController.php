<?php

namespace App\Http\Controllers\Admin;

use App\Finca;
use App\Cultivo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CultivoFincaRequest;
use DB;

class FincaCultivoController extends Controller
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
        $fincas = DB::table('fincas')->get();
        $cultivos = DB::table('cultivos')->get();
        return view('adm.cultivofinca.create', ['listfincas' => $fincas, 'listcultivos' => $cultivos, ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CultivoFincaRequest $request)
    {
        $cultivofinca = Finca::find($request->finca_id);
        $cultivofinca->cultivos()->attach($request->cultivo_id);

        $notificacion = array(
            'message' => 'Relacion cultivo-finca agregada con exito.',
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
        $cultivofinca = DB::select(
            'SELECT cultivo_finca.id, cultivo_finca.finca_id, cultivo_finca.cultivo_id, cultivo_finca.created_at, cultivo_finca.updated_at, cultivos.cultivo, fincas.nombre
            FROM cultivo_finca
            INNER JOIN cultivos, fincas
            WHERE cultivo_finca.finca_id = fincas.id AND cultivo_finca.cultivo_id = cultivos.id AND cultivo_finca.id ='.$id.';');
        
        return view('adm.cultivofinca.show')->withData($cultivofinca);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cultivofinca = DB::select(
            'SELECT cultivo_finca.id, cultivo_finca.finca_id, cultivo_finca.cultivo_id, cultivos.cultivo, fincas.nombre
            FROM cultivo_finca
            INNER JOIN cultivos, fincas
            WHERE cultivo_finca.finca_id = fincas.id AND cultivo_finca.cultivo_id = cultivos.id AND cultivo_finca.id ='.$id.';');

        $fincas = DB::table('fincas')->get();
        $cultivos = DB::table('cultivos')->get();
        return view('adm.cultivofinca.edit', ['data' => $cultivofinca, 'listfincas' => $fincas, 'listcultivos' => $cultivos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CultivoFincaRequest $request, $id)
    {
        DB::table('cultivo_finca')
            ->where('id', $id)
            ->update(['cultivo_id' => $request->cultivo_id ]);
        
        DB::table('cultivo_finca')
            ->where('id', $id)
            ->update(['finca_id' => $request->finca_id ]);
        
        $notificacion = array(
            'message' => 'Relacion actualizada con exito!',
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
        DB::table('cultivo_finca')->where('id', '=', $id)->delete();                   

        $notificacion = array(
            'message' => 'Relacion eliminada con exito.',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
