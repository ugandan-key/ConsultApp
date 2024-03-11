<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pacientes = Paciente::all();
        return $pacientes;
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
        //
        $paciente = new Paciente();
        $paciente->CURP = $request->CURP;
        $paciente->NOMBRE = $request->NOMBRE;
        $paciente->APELLIDO_PATERNO = $request->APELLIDO_PATERNO;
        $paciente->APELLIDO_MATERNO = $request->APELLIDO_MATERNO;
        $paciente->NIVEL_SOCIOECONOMICO = $request->NIVEL_SOCIOECONOMICO;
        $paciente->VIVIENDA = $request->VIVIENDA;
        $paciente->TIPO_SANGUINEO = $request->TIPO_SANGUINEO;
        $paciente->DISCAPACIDAD = $request->DISCAPACIDAD;
        $paciente->GRUPO_ETNICO = $request->GRUPO_ETNICO;
        $paciente->RELIGION = $request->RELIGION;
        $paciente->CALLE = $request->CALLE;
        $paciente->NUMERO_EXT = $request->NUMERO_EXT;
        $paciente->NUMERO_INT = $request->NUMERO_INT;
        $paciente->ESTADO = $request->ESTADO;
        $paciente->MUNICIPIO = $request->MUNICIPIO;
        $paciente->LOCALIDAD = $request->LOCALIDAD;
        $paciente->COLONIA = $request->COLONIA;
        $paciente->CODIGO_POSTAL = $request->CODIGO_POSTAL;
        $paciente->TELEFONO_1 = $request->TELEFONO_1;
        $paciente->TELEFONO_2 = $request->TELEFONO_2;

        $paciente->save();
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
        //
        $paciente = Paciente::findOrFail($request->id);
        $paciente->CURP = $request->CURP;
        $paciente->NOMBRE = $request->NOMBRE;
        $paciente->APELLIDO_PATERNO = $request->APELLIDO_PATERNO;
        $paciente->APELLIDO_MATERNO = $request->APELLIDO_MATERNO;
        $paciente->NIVEL_SOCIOECONOMICO = $request->NIVEL_SOCIOECONOMICO;
        $paciente->VIVIENDA = $request->VIVIENDA;
        $paciente->TIPO_SANGUINEO = $request->TIPO_SANGUINEO;
        $paciente->DISCAPACIDAD = $request->DISCAPACIDAD;
        $paciente->GRUPO_ETNICO = $request->GRUPO_ETNICO;
        $paciente->RELIGION = $request->RELIGION;
        $paciente->CALLE = $request->CALLE;
        $paciente->NUMERO_EXT = $request->NUMERO_EXT;
        $paciente->NUMERO_INT = $request->NUMERO_INT;
        $paciente->ESTADO = $request->ESTADO;
        $paciente->MUNICIPIO = $request->MUNICIPIO;
        $paciente->LOCALIDAD = $request->LOCALIDAD;
        $paciente->COLONIA = $request->COLONIA;
        $paciente->CODIGO_POSTAL = $request->CODIGO_POSTAL;
        $paciente->TELEFONO_1 = $request->TELEFONO_1;
        $paciente->TELEFONO_2 = $request->TELEFONO_2;

        $paciente->save();
        return $paciente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $paciente = Paciente::destroy($request->id);
        return $paciente;
    }
}
