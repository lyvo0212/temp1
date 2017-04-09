<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCTHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CT_HoaDon', function (Blueprint $table) {
            $table->integer('id_HD')->unsigned();
            $table->foreign('id_HD')->references('id')->on('HoaDon');
            $table->integer('id_MH')->unsigned();
            $table->foreign('id_MH')->references('id')->on('MatHang');
            $table->primary(['id_HD', 'id_MH']);        
            $table->string('SoLo',200);
            $table->integer('SoLuong');
            $table->decimal('GiaBan',9,0);
            $table->decimal('ThanhTien',9,0);
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
        Schema::dropIfExists('CT_HoaDon');
    }
}
