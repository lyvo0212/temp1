<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTonKhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TonKho', function (Blueprint $table) {
            $table->integer('MaMH')->unsigned();
            $table->foreign('MaMH')->references('id')->on('MatHang');
            $table->string('SoLo',50);
            $table->integer('SoLuong');
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
        Schema::dropIfExists('TonKho');
    }
}
