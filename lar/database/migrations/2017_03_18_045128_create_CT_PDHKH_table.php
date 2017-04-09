<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCTPDHKHTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CT_PDHKH', function (Blueprint $table) {
            $table->integer('id_PDHKH')->unsigned();
            $table->foreign('id_PDHKH')->references('id')->on('PhieuDHKH');
            $table->integer('id_MatHang')->unsigned();
            $table->foreign('id_MatHang')->references('id')->on('MatHang');
            $table->primary(['id_PDHKH', 'id_MatHang']);
            $table->integer('SLDat');
            $table->decimal('DonGia',9,0);
            $table->integer('GiamGia');
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
        Schema::dropIfExists('CT_PDHKH');
    }
}
