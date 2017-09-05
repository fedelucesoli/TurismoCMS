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
            $table->string('telefono')->nullable()	;
            $table->string('web')->nullable()	;
            $table->string('email')->nullable()	;

            // $table->integer('votos');
            // $table->integer('votantes');

            $table->decimal('lng', 11, 7)->nullable()	;
            $table->decimal('lat', 11, 7)->nullable()	;

            $table->string('categoria')->nullable()	;
            $table->string('estrellas')->nullable()	;
            $table->boolean('activo');
            $table->boolean('id_usuario');

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
