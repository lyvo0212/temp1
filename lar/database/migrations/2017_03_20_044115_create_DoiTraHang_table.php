<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoiTraHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DoiTraHang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_HoaDon')->unsigned();
            $table->foreign('id_HoaDon')->references('id')->on('HoaDon');
            $table->string('Lydo',300);
            $table->date('NgayTra');
            $table->decimal('TongTien',9,0);
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
        Schema::dropIfExists('DoiTraHang');
    }
}
