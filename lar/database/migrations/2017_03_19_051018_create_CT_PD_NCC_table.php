<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCTPDNCCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CT_PD_NCC', function (Blueprint $table) {
            $table->integer('id_MH')->unsigned();
            $table->foreign('id_MH')->references('id')->on('MatHang');
            $table->integer('id_PDNCC')->unsigned();
        $table->foreign('id_PDNCC')->references('id')->on('PhieuDH_NCC');
            $table->primary(['id_PDNCC', 'id_MH']);
            $table->string('SoLo',100);
            $table->integer('SoLuong');
            $table->date('NgaySX');
            $table->date('NgayHetHan');
            $table->decimal('GiaNhap');
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
        Schema::dropIfExists('CT_PD_NCC');
    }
}
