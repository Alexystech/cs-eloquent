<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->string('id_docente', 9);
            $table->string('nombre', 20);
            $table->string('apellido_paterno', 20);
            $table->string('apellido_materno', 20);
            $table->string('rfc', 13);
            $table->string('curp', 18);
            $table->string('domicilio', 70);
            $table->string('nss', 11);
            $table->string('contraseña');
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
        Schema::dropIfExists('docentes');
    }
}
