<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmacenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo', 255);
            $table->string('descripcion', 255);
       
                  
            $table->bigint('sucursal')->unsigned();
            $table->foreign('sucursal')->references('id')->on('sucursals')
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
        Schema::dropIfExists('almacen');
    }
}
