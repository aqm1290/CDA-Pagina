<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre')->nullable();
            $table->integer('Imagen')->nullable()->unsigned();
            $table->string('Lugar')->nullable();
            $table->string('Fecha')->nullable();
            $table->string('Hora')->nullable();
            $table->string('Categoria')->nullable();
            $table->string('Precio')->nullable();
            $table->string('Expositor')->nullable();
            $table->string('TextoAdicional')->nullable();
            $table->text('Descipcion')->nullable();
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
        Schema::dropIfExists('cursos');
    }
};
