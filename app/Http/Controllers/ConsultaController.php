<?php

namespace App\Http\Controllers;
use App\Models\Consulta;
use App\Models\Consultas;
use App\Models\Paciente;


use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    //
    public function index()
    {
        $consultas = Consulta::with('paciente')->latest()->paginate(10);
        return view('consultas', compact('consultas'));
    }

    public function create()
    {
        $pacientes = Paciente::all(); // Obtén todos los pacientes
        $pacientesDecrypted = $pacientes->map(function ($item){
            $item->CURP = decrypt($item->CURP);
            $item->NOMBRE = decrypt($item->NOMBRE);
            $item->APELLIDO_PATERNO = decrypt($item->APELLIDO_PATERNO);
            $item->APELLIDO_MATERNO = decrypt($item->APELLIDO_MATERNO);
            $item->CALLE = decrypt($item->CALLE);
            $item->NUMERO_EXT = decrypt($item->NUMERO_EXT);
            $item->NUMERO_INT = decrypt($item->NUMERO_INT);
            $item->ESTADO = decrypt($item->ESTADO);
            $item->MUNICIPIO = decrypt($item->MUNICIPIO);
            $item->LOCALIDAD = decrypt($item->LOCALIDAD);
            $item->COLONIA = decrypt($item->COLONIA);
            $item->TELEFONO_1 = decrypt($item->TELEFONO_1);
            $item->TELEFONO_2 = decrypt($item->TELEFONO_2);
        });
        return view('consultas.create', compact('pacientes'));
    }

    public function store(Request $request)
    {
        Consulta::create($request->all());
        return redirect()->route('consultas.index')->with('success', 'Consulta creada correctamente.');
    }


}
