<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('titulo');
            $table->text('descripcion');
            $table->date('fecha');
            $table->string('portada');
            $table->string('foto');
            $table->string('badge');

            $table->string('telefono');
            $table->string('web');
            $table->string('email');

            $table->integer('asistire');

            $table->string('categoria');

            $table->string('estrellas');
            $table->string('peso');

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
        Schema::dropIfExists('eventos');
    }
}
