<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->id();
            $table->string('id_placa_camion', 75)->unique;
            $table->string('placa_camion', 6);
            $table->string('marca', 45);
            $table->string('color', 25);
            $table->string('modelo', 45);
            $table->string('capacidad', 45);
            $table->string('transporte_codigo', 45);
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
        Schema::dropIfExists('camion');
    }
}
