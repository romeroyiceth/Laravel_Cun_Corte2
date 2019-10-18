<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorComicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_comic', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('autor_id')->unsigned();
            $table->Integer('comic_id')->unsigned();
            $table->foreign('autor_id') ->references('id')->on('autors')->onDelete('cascade');
            $table->foreign('comic_id') ->references('id')->on('comics')->onDelete('cascade');
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
        Schema::dropIfExists('autor_comic');
    }
}
