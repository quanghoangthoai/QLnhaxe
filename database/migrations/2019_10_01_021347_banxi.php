<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Banxi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banxi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('soHD');
            $table->integer('gianhap');
            $table->string('tinhtrang');
            $table->integer('giaban');
            $table->string('noixuat');
            $table->dateTime('ngayxuat');
            $table->bigInteger('kho_id')->unsigned();
            $table->bigInteger('thongtinxe_id')->unsigned();
            $table->timestamps();
            $table->foreign('kho_id')->references('id')->on('kho');
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
        Schema::dropIfExists('banxi');
    }
}
