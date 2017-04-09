<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('id_LoaiNV')->unsigned();
            $table->string('name',256)->nullable();
            $table->string('password',200);
            $table->string('GioiTinh',3);
            $table->date('NgaySinh');
            $table->string('DiaChi',256);
            $table->string('DT',11);
            $table->string('email',100)->nullable();
            $table->integer('TongXu');
            $table->string('ChucVu',200);
            $table->boolean('status');
            $table->rememberToken();
            $table->foreign('id_LoaiNV')->references('id')->on('LoaiNhanVien');
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
        Schema::dropIfExists('users');
    }
}
