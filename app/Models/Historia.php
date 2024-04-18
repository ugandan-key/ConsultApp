<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    use HasFactory;

    protected $fillable = ['id_paciente', 'AHF', 'APNP', 'AGO', 'APP', 'PA', 'DIAGNOSTICO', 'TRATAMIENTO'];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}
