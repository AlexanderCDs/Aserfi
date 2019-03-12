<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPerfilpermisos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfilpermisos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('permiso_id');
            $table->foreign('permiso_id')->nullable()->references('id')->on('permisos')->onDelete('cascade');
            $table->unsignedInteger('perfil_id');
            $table->foreign('perfil_id')->nullable()->references('id')->on('perfiles')->onDelete('cascade');
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
        Schema::dropIfExists('perfilpermisos');
    }
}
