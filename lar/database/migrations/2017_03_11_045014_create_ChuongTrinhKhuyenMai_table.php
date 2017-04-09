<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuongTrinhKhuyenMaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChuongTrinhKhuyenMai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenKM',200);
            $table->date('NgayBD');
            $table->date('NgayKT');
            $table->string('Hinh',200);
            $table->string('NoiDung',200);
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
        Schema::dropIfExists('ChuongTrinhKhuyenMai');
    }
}
