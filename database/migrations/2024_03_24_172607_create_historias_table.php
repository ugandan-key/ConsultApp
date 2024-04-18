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
        Schema::create('historias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_paciente')->unsigned();
            $table->string('AHF');
            $table->string('APNP');
            $table->string('AGO');
            $table->string('APP');
            $table->string('PA');
            $table->string('DIAGNOSTICO');
            $table->string('TRATAMIENTO');

            $table->foreign('id_paciente')->references('id')->on('pacientes')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historias');
    }
};
