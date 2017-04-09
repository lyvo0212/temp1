<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoaDon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_PDHKH')->unsigned();
            $table->foreign('id_PDHKH')->references('id')->on('PhieuDHKH');
            $table->integer('id_GiaoHang')->unsigned();
        $table->foreign('id_GiaoHang')->references('id')->on('GiaoHang');
            $table->integer('id_KH_HD');
            $table->integer('id_NV_HD');
            $table->string('NguoiNhan',100);
            $table->string('NguoiLap',100);
            $table->date('NgayIn');
            $table->integer('Giamgia_TichXu');
            $table->decimal('PhiShip',9,0);
            $table->decimal('TongGia',9,0);
            $table->decimal('TongThanhTien',9,0);
            $table->decimal('TienDaThanhToan',9,0);
            $table->decimal('TienChuaThanhToan',9,0);
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
        Schema::dropIfExists('HoaDon');
    }
}
