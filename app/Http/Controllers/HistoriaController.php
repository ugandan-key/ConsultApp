<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historia;
use DB;

class HistoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $historias = Historia::all();
        return $historias;
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
        $historia = new Historia();
        $historia->id_paciente = $request->id_paciente;
        $historia->AHF = $request->AHF;
        $historia->APNP = $request->APNP;
        $historia->AGO = $request->AGO;
        $historia->APP = $request->APP;
        $historia->PA = $request->PA;
        $historia->DIAGNOSTICO = $request->DIAGNOSTICO;
        $historia->TRATAMIENTO = $request->TRATAMIENTO;

        $historia->save();
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
        $historia = Historia::findOrFail($request->id);
        $historia->id_paciente = $request->id_paciente;
        $historia->AHF = $request->AHF;
        $historia->APNP = $request->APNP;
        $historia->AGO = $request->AGO;
        $historia->APP = $request->APP;
        $historia->PA = $request->PA;
        $historia->DIAGNOSTICO = $request->DIAGNOSTICO;
        $historia->TRATAMIENTO = $request->TRATAMIENTO;

        $historia->save();
        return $historia;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $historia = Historia::destroy($request->id);
        return $historia;
    }
}
