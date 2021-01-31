<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo', 255);
            $table->string('descripcion', 255);
            $table->string('direccion', 255);

            $table->tinyint('estado')->unsigned();
            $table->foreign('estado')->references('id_estado')->on('estados')
                  ->onDelete('cascade')
                  ->onUpdate('cascade'); 
       
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
        Schema::dropIfExists('sucursal');
    }
}
