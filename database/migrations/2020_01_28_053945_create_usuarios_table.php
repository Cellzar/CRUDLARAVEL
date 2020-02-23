<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('cedula')->nullable();
            $table->string('telefono')->nullable();
            $table->string('fecha')->nullable();
            $table->timestamps();
        });

        Schema::create('vehiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa')->nullable();
            $table->string('vin')->nullable();
            $table->integer('year')->nullable();
            $table->string('modelo')->nullable();
            $table->string('color')->nullable();
            $table->string('kilometraje')->nullable();
            $table->bigInteger('usuario_id')->unsigned();            
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
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
        
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('vehiculos');
    }
}
