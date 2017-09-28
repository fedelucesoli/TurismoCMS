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
            $table->text('descripcion')->nullable();
            $table->date('fecha');
            $table->string('hora');

            $table->string('portada')->nullable();
            $table->string('foto')->nullable();
            $table->string('badge')->nullable();

            $table->integer('asistire')->nullable();

            $table->string('categoria');
            $table->string('lugar');


            $table->string('estrellas');
            $table->string('peso');

            $table->boolean('activo')->default(0);

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
