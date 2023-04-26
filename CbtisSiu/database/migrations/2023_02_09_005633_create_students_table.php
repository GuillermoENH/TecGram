<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('ApellidoP');
            $table->string('ApellidoM');
            $table->string('Nombre');
            $table->string('CURP');
            $table->string('Ciudad');
            $table->string('Domicilio');
            $table->string('Colonia');
            $table->integer('CP');
            $table->string('Telefono');
            $table->string('TelefonoP');
            $table->string('Email');
            $table->string("Especialidad1");
            $table->string("Especialidad2");
            $table->double('Promedio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
