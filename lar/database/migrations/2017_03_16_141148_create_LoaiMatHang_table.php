<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiMatHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LoaiMatHang', function (Blueprint $table) {
        $table->increments('id');
        $table->string('TenLoai', 200);
        $table->string('BiDanh', 200);
        $table->string('Hinh', 200)->nullable();
        $table->text('MoTa')->nullable();
        $table->integer('lft');
        $table->integer('rgt');
        $table->integer('depth')->default(1);
        $table->integer('parent_id')->default(1);
        $table->timestamps();
      });
        DB::table('LoaiMatHang')->insert([
          [
              'id' => 1,
              'TenLoai' => 'Root',
              'BiDanh' => 'tat-ca-san-pham',
              'lft' => 1,
              'rgt' => 2,
              'parent_id' => 0,
              'depth' => 0,
              'MoTa' => 'Root'
          ]
      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LoaiMatHang');
    }
}
