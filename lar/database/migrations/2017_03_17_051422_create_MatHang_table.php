<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MatHang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_Xuatxu')->unsigned();
            $table->foreign('id_Xuatxu')->references('id')->on('XuatXu');
            $table->integer('id_MaLoai')->unsigned();
         $table->foreign('id_MaLoai')->references('id')->on('LoaiMatHang');
            $table->integer('id_ThuongHieu')->unsigned();
        $table->foreign('id_ThuongHieu')->references('id')->on('ThuongHieu');
          $table->integer('id_LKLT')->unsigned();
            $table->foreign('id_LKLT')->references('id')->on('LoaiKhoiLuongTinh');
            $table->integer('id_LDVT')->unsigned();
            $table->foreign('id_LDVT')->references('id')->on('LoaiDonViTinh');
            $table->integer('id_NhaCC')->unsigned();
            $table->foreign('id_NhaCC')->references('id')->on('NhaCungCap');
            $table->string('TenMH',100);
            $table->string('BiDanh',100);
            $table->string('TenThuonghieu',100);
            $table->string('TenXuatXu',100);
            $table->integer('GiaTriKLT');
            $table->integer('GiaTriDVT');
            $table->text('MoTaSP');
            $table->string('Hinh',100);
            $table->string('HinhChiTiet',100);
            $table->decimal('GiaNhap',9,0);
            $table->decimal('GiaBan',9,0);
            $table->decimal('GiaGiam',9,0);
            $table->integer('MaSPKM')->unsigned()->nullable();
            $table->integer('SLKM')->nullable();
            $table->boolean('Tinhtrang');
            $table->timestamps();
        });
        Schema::table('MatHang', function (Blueprint $table) {
         $table->foreign('MaSPKM')->references('id')->on('MatHang');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('MatHang');
    }
}
