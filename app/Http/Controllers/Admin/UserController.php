<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('adm.user.index', ['collection' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->save();

        $notificacion = array(
            'message' => 'Usuario creado con éxito.',
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
        $user = User::where('id', $id)->findOrFail($id);
        return view('adm.user.show')->withData($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->findOrFail($id);
        return view('adm.user.edit', ['data' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::where('id', $id)->findOrFail($id);
        
        $input = $request->all();
        $user->update($input);

        $notificacion = array(
            'message' => '¡Usuario actualizado con éxito!',
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
        $existe = Self::existeRelacion($id);
        if ($existe) {
            $notificacion = array(
                'message' => '¡No se puede eliminar el usuario, está asociado a una finca!',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notificacion);
        }
        else{
            $user = User::where('id', $id)->findOrFail($id);
            $user->delete();

            $notificacion = array(
                'message' => '¡Usuario eliminado con éxito!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notificacion);
        }
    }

    public function existeRelacion($id){
        $result = DB::table('finca_user')->where('user_id', "=", $id)->first();

        if($result == NULL){
            return false;
        }
        else{
            return true;
        }
    }
}
