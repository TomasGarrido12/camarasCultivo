<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaDeOrdenDeTrabajos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenDeTrabajos', function (Blueprint $table) {
            $table->id("id");
            $table->date("fechaDeCreacion");
            $table->integer("camaraOt");
            $table->string("quienLoHizo");
            $table->date("duracionEstimada");
            $table->date("sembrado");
            $table->date("aplicado");
            $table->date("cortado");
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
        Schema::dropIfExists('ordenDeTrabajos');
    }
}
