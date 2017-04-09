<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LoaiNhanVien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenLoaiNV',200);
            $table->integer('id_quyen')->unsigned();
            $table->foreign('id_quyen')->references('id')->on('PhanQuyen');
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
        Schema::dropIfExists('LoaiNhanVien');
    }
}
