<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Birlestirme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birlestirme', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->integer('productId')->unsigned();
            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('productId')->references('id')->on('products')->cascadeOnDelete()->cascadeOnUpdate();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('birlestirme');
    }
}
