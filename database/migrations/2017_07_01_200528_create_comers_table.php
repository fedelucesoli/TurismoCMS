<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('localidad');
            $table->string('telefono');
            $table->string('web');
            $table->string('email');

            $table->integer('votos');
            $table->integer('votantes');

            $table->decimal('lng', 11, 7);
            $table->decimal('lat', 11, 7);

            $table->string('categoria');
            $table->string('estrellas');
            $table->boolean('activo');

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
        Schema::dropIfExists('comers');
    }
}
