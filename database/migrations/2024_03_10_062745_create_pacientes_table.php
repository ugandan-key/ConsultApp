<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('CURP');
            $table->string('NOMBRE');
            $table->string('APELLIDO_PATERNO');
            $table->string('APELLIDO_MATERNO');
            $table->string('NIVEL_SOCIOECONOMICO');
            $table->string('VIVIENDA');
            $table->string('TIPO_SANGUINEO');
            $table->string('DISCAPACIDAD');
            $table->string('GRUPO_ETNICO');
            $table->string('RELIGION');
            $table->string('CALLE');
            $table->string('NUMERO_EXT');
            $table->string('NUMERO_INT');
            $table->string('ESTADO');
            $table->string('MUNICIPIO');
            $table->string('LOCALIDAD');
            $table->string('COLONIA');
            $table->string('CODIGO_POSTAL');
            $table->string('TELEFONO_1');
            $table->string('TELEFONO_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
