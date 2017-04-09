<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieuDHKHTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PhieuDHKH', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_NhanVien')->unsigned();
        $table->foreign('id_NhanVien')->references('id')->on('users');
            $table->integer('id_HinhThucTT')->unsigned();
        $table->foreign('id_HinhThucTT')->references('id')->on('HinhThucThanhToan');
            $table->integer('id_DoiXu')->unsigned();
            $table->foreign('id_DoiXu')->references('id')->on('QuyDoiXu');
            $table->integer('id_KhachHang')->unsigned();
         $table->foreign('id_KhachHang')->references('id')->on('users');
            $table->integer('id_Tinh')->unsigned();
            $table->foreign('id_Tinh')->references('id')->on('GiaShip');
            $table->decimal('Phiship');
            $table->string('NhanVienLap',100);
            $table->string('DiaChiNhan',300);
            $table->string('MaXacNhan',10);
            $table->decimal('TongThanhTien',9,0);
            $table->date('NgayGiaoDuKien');
            $table->integer('GiamGia_TichXu');
            $table->boolean('TinhTrangDuyet');
            $table->boolean('TinhTrangGiaoKH');
            $table->boolean('TinhTrangHuy');
            $table->decimal('TienDaThanhToan',9,0);
            $table->boolean('TinhTrangThanhToan');
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
        Schema::dropIfExists('PhieuDHKH');
    }
}
