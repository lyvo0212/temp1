<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiaoHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GiaoHang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MaNV')->unsigned();
            $table->foreign('MaNV')->references('id')->on('users');
            $table->integer('MaCtygiao')->unsigned();
            $table->foreign('MaCtyGiao')->references('id')->on('CtyGiao');
            $table->date('NgayGiao');
            $table->boolean('TinhTrang');
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
        Schema::dropIfExists('GiaoHang');
    }
}
