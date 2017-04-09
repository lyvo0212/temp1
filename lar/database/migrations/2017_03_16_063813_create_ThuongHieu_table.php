<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThuongHieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ThuongHieu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenThuongHieu',100);
            $table->string('BiDanh',100);
            $table->string('Hinh', 200)->nullable();
            $table->text('MoTa')->nullable();
            $table->integer('lft');
            $table->integer('rgt');
            $table->integer('depth')->default(1);
            $table->integer('parent_id')->default(1);
            $table->timestamps();
        });
        DB::table('ThuongHieu')->insert([
          [
              'id' => 1,
              'TenThuongHieu' => 'Root',
              'BiDanh' => 'tat-ca-thuong-hieu',
              'Hinh'    =>'logo1.jpg',
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
        Schema::dropIfExists('ThuongHieu');
    }
}
