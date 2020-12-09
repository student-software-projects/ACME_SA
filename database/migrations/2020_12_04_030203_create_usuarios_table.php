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
            $table->id();
            $table->bigInteger('numeroCedula');
            $table->string('primerNombre', 45);
            $table->string('segundoNombre', 45)->nullable();
            $table->string('apellidos', 45);
            $table->string('direccion', 45);
            $table->string('telefono', 45);
            $table->string('ciudad', 45);

            $table->bigInteger('tipoUsuarios_id')->unsigned();

            $table->foreign('tipoUsuarios_id')->references('id')->on('tipo_usuarios');

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
    }
}
