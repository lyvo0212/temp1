<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieuDHNCCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PhieuDH_NCC', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_HTTT')->unsigned();
            $table->foreign('id_HTTT')->references('id')->on('HinhThucThanhToan');
            $table->integer('id_NV')->unsigned();
            $table->foreign('id_NV')->references('id')->on('users');
            $table->integer('id_NCC')->unsigned();
            $table->foreign('id_NCC')->references('id')->on('NhaCungCap');
            $table->date('NgayDat');
            $table->decimal('TongTienTT',9,0);
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
        Schema::dropIfExists('PhieuDH_NCC');
    }
}
