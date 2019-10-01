<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Xuatnoibo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuatnoibo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('soHD');
            $table->string('tinhtrang');
            $table->dateTime('ngayxuat');
            $table->bigInteger('thongtinxe_id')->unsigned();
            $table->bigInteger('kho_id')->unsigned();
            $table->timestamps();
            $table->foreign('thongtinxe_id')->references('id')->on('thongtinxe');
            $table->foreign('kho_id')->references('id')->on('kho');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xuatnoibo');
    }
}
