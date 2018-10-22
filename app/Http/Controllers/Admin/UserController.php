<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

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
            'message' => 'Usuario Agregado Con Exito.',
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
    public function update(Request $request, $id)
    {
        $user = User::where('id')->findOrFail($id);
        $input = $request->all();
        $user->update($input);

        $notificacion = array(
                'message' => 'Usuario Actualizada Con Exito!',
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
        $user = User::where('id')->findOrFail($id);
        $user->delete();

        $notificacion = array(
            'message' => 'Usuario Eliminado Con Exito.',
            'alert-type' => 'info'
        );
      return redirect()->back()->with($notificacion);
    }
}
