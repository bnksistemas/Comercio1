<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('dni')->nullable();
            $table->string('nombre', 50);
            $table->string('tel1',30)->nullable();
            $table->string('tel2',30)->nullable();
            $table->string('domicilio',80)->nullable();
            $table->integer('depto')->nullable();
            $table->string('observaciones', 200)->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
