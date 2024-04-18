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
            $table->string('CURP', 255);
            $table->string('NOMBRE', 255);
            $table->string('APELLIDO_PATERNO', 255);
            $table->string('APELLIDO_MATERNO', 255);
            $table->string('NIVEL_SOCIOECONOMICO', 255);
            $table->string('VIVIENDA', 255);
            $table->string('TIPO_SANGUINEO', 255);
            $table->string('DISCAPACIDAD', 255);
            $table->string('GRUPO_ETNICO', 255);
            $table->string('RELIGION', 255);
            $table->string('CALLE', 255);
            $table->string('NUMERO_EXT', 255);
            $table->string('NUMERO_INT', 255);
            $table->string('ESTADO', 255);
            $table->string('MUNICIPIO', 255);
            $table->string('LOCALIDAD', 255);
            $table->string('COLONIA', 255);
            $table->string('CODIGO_POSTAL', 255);
            $table->string('TELEFONO_1', 255);
            $table->string('TELEFONO_2', 255);
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
