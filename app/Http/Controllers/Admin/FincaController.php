<?php

namespace App\Http\Controllers\Admin;

use App\Finca;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FincaController extends Controller
{
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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
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
