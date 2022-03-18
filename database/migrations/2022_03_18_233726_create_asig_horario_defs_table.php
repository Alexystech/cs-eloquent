<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsigHorarioDefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asig_horario_defs', function (Blueprint $table) {
            $table->id('id_asig_horario_def');
            $table->integer('semestre');

            $table->bigInteger('fk_id_asignatura');
            $table->foreign('fk_id_asignatura')
                ->references('id_asignatura')
                ->on('asignaturas');

            $table->bigInteger('fk_id_docente');
            $table->foreign('fk_id_docente')
                ->references('id_docente')
                ->on('docentes');

            $table->bigInteger('fk_id_hora');
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
        Schema::dropIfExists('asig_horario_defs');
    }
}
