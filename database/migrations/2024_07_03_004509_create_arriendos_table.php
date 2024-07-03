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
        Schema::create('arriendos', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->string('rut');          
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('tipo');
            $table->dateTime('fechaI');
            $table->dateTime('fechaT');
            $table->string('patente');

            //$table->timestamps();

            $table->foreign('patente')->references('patente')->on('vehiculos');
            $table->unsignedBigInteger('perfil_id');
            $table->foreign('perfil_id')->references('id')->on('perfiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arriendos');
    }
};
