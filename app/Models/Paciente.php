<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = ['CURP', 'NOMBRE', 'APPELLIDO_PATERNO', 'APELLIDO_MATERNO', 'NIVEL_SOCIOECONOMICO', 'VIVIENDA', 'TIPO_SANGUINEO', 'DISCAPACIDAD', 
    'GRUPO_ETNICO', 'RELIGION', 'CALLE', 'NUMERO_EXT', 'NUMERO_INT', 'ESTADO', 'MUNICIPIO', 'LOCALIDAD', 'COLONIA', 'CODIGO_POSTAL', 'TELEFONO_1','TELEFONO_2'];
}
