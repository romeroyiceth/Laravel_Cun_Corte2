<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programadores', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('identificacion');
            $table->String('nombre');
            $table->String('apellido');
            $table->String('correo');
            $table->String('cargo');
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
        Schema::dropIfExists('programadores');
    }
}
