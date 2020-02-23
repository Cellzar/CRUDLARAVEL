<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;
use App;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = App\usuarios::paginate(3);
        return view('inicio', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarioAgregar = new usuarios();
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'cedula' => 'required',
            'telefono' => 'required',
            'fecha' => 'required'
        ]);
        $usuarioAgregar->nombres = $request->nombres;
        $usuarioAgregar->apellidos = $request->apellidos;
        $usuarioAgregar->cedula = $request->cedula;
        $usuarioAgregar->telefono = $request->telefono;
        $usuarioAgregar->fecha = $request->fecha;
        $usuarioAgregar->save();
        return back()->with('agregar', 'usuario agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$usuarioActualizar = App\usuarios::findOrFail($id);
        //return view('vehiculoPrincipal', compact('usuarioActualizar'));
        //$usuarios = App\usuarios::paginate(3);
        //return view('vehiculoPrincipal', compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarioActualizar = App\usuarios::findOrFail($id);
        return view('editar', compact('usuarioActualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuarioUpdate = App\usuarios::findOrFail($id);
        $usuarioUpdate->nombres = $request->nombres;
        $usuarioUpdate->apellidos = $request->apellidos;
        $usuarioUpdate->cedula = $request->cedula;
        $usuarioUpdate->telefono = $request->telefono;
        $usuarioUpdate->fecha = $request->fecha;
        $usuarioUpdate->save();
        return back()->with('Actualizar', 'usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarioBorrar = App\usuarios::findOrFail($id);
        $usuarioBorrar->delete();
        return back()->with('eliminar', 'usuario eliminado');
    }
}
