<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function(Blueprint $table){
            $table->id()->primary();
            $table->string('NOMBRES', 100);
            $table->string('APELLIDOS', 100);
            $table->string('CORREO', 100);
            $table->string('PSWD', 100);
            $table->string('ROL', 100);
            $table->integer('ACTIVO')->default(1);
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
