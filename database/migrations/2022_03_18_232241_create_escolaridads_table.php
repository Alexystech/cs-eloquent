<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolaridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolaridads', function (Blueprint $table) {
            $table->id('id_escolaridads');
            $table->string('carrera', 70);
            $table->string('cedula_prof', 8);

            $table->string('fk_id_docente', 9);
            $table->foreign('fk_id_docente')
                ->references('id_docente')
                ->on('docentes');

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
        Schema::dropIfExists('escolaridads');
    }
}
