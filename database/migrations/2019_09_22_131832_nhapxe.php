<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nhapxe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhapxe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('somay');
            $table->string('nhacc');
            $table->date('ngaynhan');
            $table->string('mahd');
            $table->date('ngayhd');
            $table->integer('maID');
            $table->integer('gianhap');
            $table->integer('kho_id')->unsigned();
            $table->integer('nhanvien_id')->unsigned();
            $table->integer('thongtinxe_id')->unsigned();
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
        Schema::dropIfExists('nhapxe');
    }
}
