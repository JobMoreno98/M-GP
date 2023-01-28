<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCarrusel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrusel', function(Blueprint $table){
            $table->id()->primary();
            $table->string('IMGPATH', 100);
            $table->string('TITULO', 100);
            $table->string('DESCRIPCION', 100);
            $table->string('BUTTONTEXT', 100);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
