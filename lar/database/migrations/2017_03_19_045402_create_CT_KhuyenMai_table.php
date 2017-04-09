<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCTKhuyenMaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CT_KhuyenMai', function (Blueprint $table) {
            $table->integer('id_KM')->unsigned();
            $table->foreign('id_KM')->references('id')->on('ChuongTrinhKhuyenMai');
            $table->integer('id_MatHang')->unsigned();
            $table->foreign('id_MatHang')->references('id')->on('MatHang');
            $table->primary(['id_KM', 'id_MatHang']);
            $table->integer('PhantramKM'); 
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
        Schema::dropIfExists('CT_KhuyenMai');
    }
}
