<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motores', function (Blueprint $table) {
            $table->integer('auto_id')->unsigned();
            $table->primary('auto_id');
            $table->string('modelo');
            $table->double('potencia');
            $table->double('rendimiento');
            $table->double('consumo');
            $table->foreign('auto_id') ->references('id')->on('autos')->onDelete('cascade');
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
        Schema::dropIfExists('motores');
    }
}
