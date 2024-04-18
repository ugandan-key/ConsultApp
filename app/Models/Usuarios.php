<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'curp',
        'lastname_p',
        'lastname_m',
        'se_level',
        'housing',
        'blood_type',
        'disability',
        'etnic_group',
        'religion',
        'street',
        'ext_number',
        'int_number',
        'locations',
        'id_state',
        'id_municipality',
        'id_locality',
        'cologne',
        'cp',
        'id_doctor',
        'id_medHis',
    ];
    
}
