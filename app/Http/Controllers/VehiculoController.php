<?php

namespace App\Http\Controllers;

use App\vehiculo;
use Illuminate\Http\Request;
use App;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculo = App\vehiculo::paginate(3);
        return view('inicio', compact('vehiculo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculoAgregar = new vehiculo();
        $vehiculoAgregar->placa = $request->placa;
        $vehiculoAgregar->vin = $request->vin;
        $vehiculoAgregar->year = $request->year;
        $vehiculoAgregar->modelo = $request->modelo;
        $vehiculoAgregar->color = $request->color;
        $vehiculoAgregar->kilometraje = $request->kilometraje;
        $vehiculoAgregar->usuario_id = $request->usuario_id;
        $vehiculoAgregar->save();
        return back()->with('agregar', 'vehiculo agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */

    public function misVehiculos($id)
    {
        $vehiculoAct = App\vehiculo::all($id);
        return compact('vehiculoAct');
    }

    public function show($id)
    {
        $usuarioActualizar = App\usuarios::findOrFail($id);
        return view('vehiculoPrincipal', compact('usuarioActualizar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(vehiculo $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vehiculo $vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehiculo $vehiculo)
    {
        //
    }
}
