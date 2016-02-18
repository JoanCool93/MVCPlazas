<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Plazas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plazas', function (Blueprint $table) {
            $table->increments('idPlaza')->unsigned();
            $table->string('descripcion');
            $table->decimal('sueldo', 13, 4);
            $table->decimal('sobresueldo', 13, 4);
            $table->decimal('estimulo', 13, 4);
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
        Schema::drop('plazas');
    }
}
