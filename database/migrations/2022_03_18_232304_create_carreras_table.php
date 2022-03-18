<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->id('id_carrera');
            $table->string('nombre_carrera', 75);

            $table->string('fk_id_jefe_carrera', 9);
            $table->foreign('fk_id_jefe_carrera')
                ->references('id_jefe_de_carrera')
                ->on('jefe_de_carreras');

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
        Schema::dropIfExists('carreras');
    }
}
