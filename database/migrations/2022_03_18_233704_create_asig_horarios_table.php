<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsigHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asig_horarios', function (Blueprint $table) {
            $table->id('id_asig_horario');

            $table->string('fk_id_docente', 9);
            $table->foreign('fk_id_docente')
                ->references('id_docente')
                ->on('docentes');

            $table->integer('fk_id_hora');
            $table->foreign('fk_id_hora')
                ->references('id_hora')
                ->on('horas');

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
        Schema::dropIfExists('asig_horarios');
    }
}
