<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaAcademicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicos', function(Blueprint $table){
            $table->id()->primary();
            $table->string('IMGPATH', 100);
            $table->string('NOMBRES', 100);
            $table->string('APELLIDOS', 100);
            $table->string('CORREO', 100);
            $table->string('TITULO', 100);
            $table->string('DESCRIPCION', 100);
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
