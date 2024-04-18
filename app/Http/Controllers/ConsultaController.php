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
        return view('consultas.create', compact('pacientes'));
    }

    public function store(Request $request)
    {
        Consulta::create($request->all());
        return redirect()->route('consultas.index')->with('success', 'Consulta creada correctamente.');
    }


}
