<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 10);
            $table->string('color', 10);
            $table->string('marca', 10);
            $table->bigInteger('usuario_con')->unsigned();
            $table->bigInteger('usuario_pro')->unsigned();
            $table->bigInteger('tipoVehiculos_id')->unsigned();

            $table->foreign('usuario_con')->references('id')->on('usuarios');
            $table->foreign('usuario_pro')->references('id')->on('usuarios');
            $table->foreign('tipoVehiculos_id')->references('id')->on('tipo_vehiculos');

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
        Schema::dropIfExists('vehiculos');
    }
}
