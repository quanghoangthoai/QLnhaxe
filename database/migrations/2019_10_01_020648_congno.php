<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Congno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congno', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->dateTime('ngaymua');
            $table->integer('giaban');
            $table->integer('tratruoc');
            $table->integer('tralan1');
            $table->integer('conlai');
            $table->integer('tientra');
            $table->dateTime('ngaytra');
            $table->bigInteger('thongtinxe_id')->unsigned();

            $table->bigInteger('khachhang_id')->unsigned();

            $table->timestamps();
            $table->foreign('thongtinxe_id')->references('id')->on('thongtinxe');
            $table->foreign('khachhang_id')->references('id')->on('khachhang');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('congno');
    }
}
