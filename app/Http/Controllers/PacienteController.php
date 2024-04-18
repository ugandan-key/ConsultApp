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
    
        $paciente = new Paciente;

        $encryptedCURP = encrypt($request->CURP);
        $encryptedNOMBRE = encrypt($request->NOMBRE);
        $encryptedAPELLIDO_PATERNO = encrypt($request->APELLIDO_PATERNO);
        $encryptedAPELLIDO_MATERNO = encrypt($request->APELLIDO_MATERNO);
        $encryptedCALLE = encrypt($request->CALLE);
        $encryptedNUMERO_EXT = encrypt($request->NUMERO_EXT);
        $encryptedNUMERO_INT = encrypt($request->NUMERO_INT);
        $encryptedESTADO = encrypt($request->ESTADO);
        $encryptedMUNICIPIO = encrypt($request->MUNICIPIO);
        $encryptedLOCALIDAD = encrypt($request->LOCALIDAD);
        $encryptedCOLONIA = encrypt($request->COLONIA);
        $encryptedTEL1 = encrypt($request->TELEFONO_1);
        $encryptedTEL2 = encrypt($request->TELEFONO_2);

        $paciente->CURP = $encryptedCURP;
        $paciente->NOMBRE = $encryptedNOMBRE;
        $paciente->APELLIDO_PATERNO = $encryptedAPELLIDO_PATERNO;
        $paciente->APELLIDO_MATERNO = $encryptedAPELLIDO_MATERNO;
        $paciente->NIVEL_SOCIOECONOMICO = $request->NIVEL_SOCIOECONOMICO;
        $paciente->VIVIENDA = $request->VIVIENDA;
        $paciente->TIPO_SANGUINEO = $request->TIPO_SANGUINEO;
        $paciente->DISCAPACIDAD = $request->DISCAPACIDAD;
        $paciente->GRUPO_ETNICO = $request->GRUPO_ETNICO;
        $paciente->RELIGION = $request->RELIGION;
        $paciente->CALLE = $encryptedCALLE;
        $paciente->NUMERO_EXT = $encryptedNUMERO_EXT;
        $paciente->NUMERO_INT = $encryptedNUMERO_INT;
        $paciente->ESTADO = $encryptedESTADO;
        $paciente->MUNICIPIO = $encryptedMUNICIPIO;
        $paciente->LOCALIDAD = $encryptedLOCALIDAD;
        $paciente->COLONIA = $encryptedCOLONIA;
        $paciente->CODIGO_POSTAL = $request->CODIGO_POSTAL;
        $paciente->TELEFONO_1 = $encryptedTEL1;
        $paciente->TELEFONO_2 = $encryptedTEL2;

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
        $encryptedCURP = encrypt($request->CURP);
        $encryptedNOMBRE = encrypt($request->NOMBRE);
        $encryptedAPELLIDO_PATERNO = encrypt($request->APELLIDO_PATERNO);
        $encryptedAPELLIDO_MATERNO = encrypt($request->APELLIDO_MATERNO);
        $encryptedCALLE = encrypt($request->CALLE);
        $encryptedNUMERO_EXT = encrypt($request->NUMERO_EXT);
        $encryptedNUMERO_INT = encrypt($request->NUMERO_INT);
        $encryptedESTADO = encrypt($request->ESTADO);
        $encryptedMUNICIPIO = encrypt($request->MUNICIPIO);
        $encryptedLOCALIDAD = encrypt($request->LOCALIDAD);
        $encryptedCOLONIA = encrypt($request->COLONIA);
        $encryptedTEL1 = encrypt($request->TELEFONO_1);
        $encryptedTEL2 = encrypt($request->TELEFONO_2);

        $paciente->CURP = $encryptedCURP;
        $paciente->NOMBRE = $encryptedNOMBRE;
        $paciente->APELLIDO_PATERNO = $encryptedAPELLIDO_PATERNO;
        $paciente->APELLIDO_MATERNO = $encryptedAPELLIDO_MATERNO;
        $paciente->NIVEL_SOCIOECONOMICO = $request->NIVEL_SOCIOECONOMICO;
        $paciente->VIVIENDA = $request->VIVIENDA;
        $paciente->TIPO_SANGUINEO = $request->TIPO_SANGUINEO;
        $paciente->DISCAPACIDAD = $request->DISCAPACIDAD;
        $paciente->GRUPO_ETNICO = $request->GRUPO_ETNICO;
        $paciente->RELIGION = $request->RELIGION;
        $paciente->CALLE = $encryptedCALLE;
        $paciente->NUMERO_EXT = $encryptedNUMERO_EXT;
        $paciente->NUMERO_INT = $encryptedNUMERO_INT;
        $paciente->ESTADO = $encryptedESTADO;
        $paciente->MUNICIPIO = $encryptedMUNICIPIO;
        $paciente->LOCALIDAD = $encryptedLOCALIDAD;
        $paciente->COLONIA = $encryptedCOLONIA;
        $paciente->CODIGO_POSTAL = $request->CODIGO_POSTAL;
        $paciente->TELEFONO_1 = $encryptedTEL1;
        $paciente->TELEFONO_2 = $encryptedTEL2;

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
