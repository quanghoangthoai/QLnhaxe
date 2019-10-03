<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongtinxeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtinxe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('loaixe');
            $table->string('tenxe');
            $table->string('doixe');
            $table->string('mauxe');
            $table->integer('sokhung');
            $table->dateTime('somay');
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
        Schema::dropIfExists('thongtinxe');
    }
}
