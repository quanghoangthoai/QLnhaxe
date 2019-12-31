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
            $table->string('sokhung');
            $table->string('somay');
            $table->string('dongxe');
            $table->string('nhacc');
            $table->string('dangkiem')->nullable();
            $table->string('khonhan');
            $table->string('khocuoi');
            $table->string('tinhtrang')->default(0);
            $table->string('baohanh')->default(0);
            $table->date('ngayquet');

            $table->boolean('status')->default(0);
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
