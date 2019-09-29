<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('nombre');
            $table->Date('fecha_inicio');
            $table->Date('fecha_entrega');
            $table->String('empresa');
            $table->Integer('programador_id')->unsigned();
            $table->foreign('programador_id') ->references('id')->on('programadores')->onDelete('cascade');
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
        Schema::dropIfExists('proyectos');
    }
}
