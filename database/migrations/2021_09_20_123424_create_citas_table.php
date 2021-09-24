<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('citNombres');
            $table->string('citApellidos');
            $table->string('citTipoDocumento');
            $table->bigInteger('citNumDocumento')->unsigned();
            $table->date('citFecNacimiento');
            $table->string('citResidencia');
            $table->string('citDireccion', 100);
            $table->bigInteger('citTelefono')->unsigned();
            $table->string('citEmail', 50);
            $table->string('citEPS', 100);
            $table->string('citEstrato', 10);
            $table->string('citEspecialidad');
            $table->text('citMensaje');
            $table->string('citAuthorization');
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
        Schema::dropIfExists('citas');
    }
}
