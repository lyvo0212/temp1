<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinTucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TinTuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenTinTuc',256);
            $table->string('BiDanh',100);
            $table->string('Hinh',256)->nullable();
            $table->text('MoTaTomTat')->nullable();
            $table->text('MoTaChiTiet')->nullable();
            $table->string('TacGia')->nullable();
            $table->boolean('Tinhtrang');
            $table->date('NgayDang');
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
        Schema::dropIfExists('TinTuc');
    }
}
