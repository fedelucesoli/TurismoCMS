<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugars', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->string('direccion');
            $table->string('localidad');
            $table->string('telefono')->nullable()	;
            $table->string('web')->nullable()	;
            $table->string('email')->nullable()	;

            $table->decimal('lng', 11, 7)->nullable()	;
            $table->decimal('lat', 11, 7)->nullable()	;
            
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
        Schema::dropIfExists('lugars');
    }
}
