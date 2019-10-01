<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KTquatang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KTquatang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quatang_id');
            $table->dateTime('ngaynhan');
            $table->bigInteger('khachhang_id')->unsigned();
            $table->bigInteger('thongtinxe_id')->unsigned();
            $table->timestamps();
            $table->foreign('khachhang_id')->references('id')->on('khachhang');
            $table->foreign('thongtinxe_id')->references('id')->on('thongtinxe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('KTquatang');
    }
}
