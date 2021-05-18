<?php

namespace App\Http\Controllers;

use App\MUsuario;
use Illuminate\Http\Request;

class MUsuarioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $Usuario = MUsuario::all();

        return $Usuario;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create() {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $Usuario = MUsuario::create($request->all());
        return $Usuario;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MUsuario  $mUsuario
     * @return \Illuminate\Http\Response
     */
    public function show(MUsuario $mUsuario) {
        #Usuario
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MUsuario  $mUsuario
     * @return \Illuminate\Http\Response
     */
//    public function edit(MUsuario $mUsuario) {
//        
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MUsuario  $mUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MUsuario $mUsuario) {

        $request->validate([
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Correo' => 'required',
            'Telefono' => '',
            'FechaNacimiento' => ''
        ]);

        $update = [
            'Nombre' => $request->Nombre,
            'Apellido' => $request->Apellido,
            'Correo' => $request->Correo,
            'Telefono' => $request->Telefono,
            'FechaNacimiento' => $request->FechaNacimiento
        ];

        $mUsuario->where('ID_Usuario', $request->ID_Usuario)->update($update);

        return ['type' => "success", "response" => "Registro modificado"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MUsuario  $mUsuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, MUsuario $mUsuario) {
        $request->validate([
            'ID_Usuario' => 'required'
        ]);

        $mUsuario->where('ID_Usuario', $request->ID_Usuario)->delete();

        return ['type' => "success", "response" => "Registro eliminado"];
    }

}
