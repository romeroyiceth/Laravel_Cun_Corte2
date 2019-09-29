<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramadorProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programador_proyecto', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('programador_id')->unsigned();
            $table->Integer('proyecto_id')->unsigned();
            $table->foreign('programador_id') ->references('id')->on('programadores')->onDelete('cascade');
            $table->foreign('proyecto_id') ->references('id')->on('proyectos')->onDelete('cascade');
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
        Schema::dropIfExists('programador_proyecto');
    }
}
