<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuarios::all();
        return $usuarios;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $usuarios = new Usuarios();
    $usuarios->nombre = $request->nombre;
    $usuarios->apellido = $request->apellido;
    $usuarios->edad = $request->edad;
    $usuarios->cedula_profesional = $request->cedula_profesional;
    $usuarios->especialidad = $request->especialidad;
    $usuarios->cargo = $request->cargo;
    $usuarios->horario = $request->horario;

    $usuarios->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuarios = Usuario::findOrFail($request->id);
        $usuarios->nombre = $request->nombre;
        $usuarios->apellido = $request->apellido;
        $usuarios->edad = $request->edad;
        $usuarios->cedula_profesional = $request->cedula_profesional;
        $usuarios->especialidad = $request->especialidad;
        $usuarios->cargo = $request->cargo;
        $usuarios->horario = $request->horario;

        $usuarios->save();
        return $usuarios;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuarios = Usuarios::destroy($request->id);
        return $usuarios;
    }
}
