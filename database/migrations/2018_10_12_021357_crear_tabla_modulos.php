<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaModulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 200);
            $table->string('titulo', 200);
            $table->string('ruta')->nullable();
            $table->string('icono', 100);
            $table->integer('posicion');
            $table->boolean('menu');
            $table->unsignedInteger('modulopadre_id')->nullable();
            $table->foreign('modulopadre_id')->nullable()->references('id')->on('modulos')->onDelete('cascade');
            $table->string('usuarioalta', 100);
            $table->string('usuariomodificacion', 100)->nullable();
            $table->boolean('activo')->default(true);
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
        Schema::dropIfExists('modulos');
    }
}
