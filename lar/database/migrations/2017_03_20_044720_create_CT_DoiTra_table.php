<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCTDoiTraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CT_DoiTra', function (Blueprint $table) {
            $table->integer('id_DoiTra')->unsigned();
         $table->foreign('id_DoiTra')->references('id')->on('DoiTraHang');
            $table->integer('id_MatHang')->unsigned();
            $table->foreign('id_MatHang')->references('id')->on('MatHang');
            $table->primary(['id_DoiTra', 'id_MatHang']);
            $table->string('SoLo',100);
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
        Schema::dropIfExists('CT_DoiTra');
    }
}
