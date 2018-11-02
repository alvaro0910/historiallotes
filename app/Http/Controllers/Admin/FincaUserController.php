<?php

namespace App\Http\Controllers\Admin;

use App\Finca;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FincaUserRequest;
use DB;

class FincaUserController extends Controller
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
        $users = DB::table('users')->get();
        return view('adm.fincauser.create', ['listfincas' => $fincas, 'listusers' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FincaUserRequest $request)
    {
        $fincauser = Finca::find($request->finca_id);
        $fincauser->users()->attach($request->user_id);

        $notificacion = array(
            'message' => 'Relacion finca-usuario agregada con exito.',
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
        $fincauser = DB::select(
            'SELECT finca_user.id, finca_user.finca_id, finca_user.user_id, finca_user.created_at, finca_user.updated_at, fincas.nombre, users.name
            FROM finca_user
            INNER JOIN users, fincas
            WHERE finca_user.finca_id = fincas.id AND finca_user.user_id = users.id AND finca_user.id ='.$id.';');
        
        return view('adm.fincauser.show')->withData($fincauser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fincauser = DB::select(
            'SELECT finca_user.id, finca_user.finca_id, finca_user.user_id, users.name, fincas.nombre
            FROM finca_user
            INNER JOIN users, fincas
            WHERE finca_user.finca_id = fincas.id AND finca_user.user_id = users.id AND finca_user.id ='.$id.';');

        $fincas = DB::table('fincas')->get();
        $users = DB::table('users')->get();
        return view('adm.fincauser.edit', ['data' => $fincauser, 'listfincas' => $fincas, 'listusers' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FincaUserRequest $request, $id)
    {
        DB::table('finca_user')
        ->where('id', $id)
        ->update(['user_id' => $request->user_id ]);
    
        DB::table('finca_user')
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
        DB::table('finca_user')->where('id', '=', $id)->delete();                   

        $notificacion = array(
            'message' => 'Relacion eliminada con exito.',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notificacion);
    }
}
