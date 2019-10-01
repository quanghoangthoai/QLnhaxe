<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Banxe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banxe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('soHD');
            $table->integer('giaban');
            $table->integer('duatruoc');
            $table->integer('conlai');
            $table->integer('tinhtrang');
            $table->string('Hovaten');
            $table->dateTime('ngaysinh');
            $table->string('SDT');
            $table->string('ngaymua');
            $table->string('diachi');
            $table->string('phuong');
            $table->string('thanhpho');
            $table->string('tinh');
            $table->bigInteger('thongtinxe_id');
            $table->bigInteger('kho_id');
            $table->bigInteger('tragop_id');
            $table->bigInteger('nhanvien_id');
            $table->bigInteger('quatang_id');
            $table->timestamps();
            $table->foreign('thongtinxe_id')->references('id')->on('thongtinxe');
            $table->foreign('kho_id')->references('id')->on('kho');
            $table->foreign('tragop_id')->references('id')->on('tragop');
            $table->foreign('nhanvien_id')->references('id')->on('nhanvien');
            $table->foreign('quatang_id')->references('id')->on('quatang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banxe');
    }
}
