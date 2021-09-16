<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormatividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normatividad', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->enum('tipNormatividad', ['Acuerdos', 'Circulares', 'Decretos', 'Leyes', 'Resoluciones', 'Otra']);
            $table->string('nomNormatividad', 50);
            $table->text('descripNormatividad');
            $table->date('fechExpedic');
            $table->date('fechPublic');
            $table->string('iconNormatividad', 20);
            $table->string('nomArchivoNormatividad', 100);
            $table->string('pesoArchivoNormatividad', 5);
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('normatividad');
    }
}
