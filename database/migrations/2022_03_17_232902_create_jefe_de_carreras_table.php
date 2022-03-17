<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJefeDeCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jefe_de_carreras', function (Blueprint $table) {
            $table->string('id_jefe_de_carrera', 9);
            $table->string('name', 20);
            $table->string('apellido_paterno', 20);
            $table->string('apellido_materno',20);
            $table->string('rfc', 13);
            $table->string('curp', 18);
            $table->string('domicilio', 70);
            $table->string ('nss', 11);
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
        Schema::dropIfExists('jefe_de_carreras');
    }
}
