<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGopYTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GopY', function (Blueprint $table) {
            $table->integer('id_KH')->unsigned();
           $table->foreign('id_KH')->references('id')->on('users');
            $table->integer('id_MH')->unsigned();
            $table->foreign('id_MH')->references('id')->on('MatHang');
            $table->primary(['id_KH', 'id_MH']);
            $table->string('NoiDung',300)->nullable();
            $table->date('NgayTao');
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
        Schema::dropIfExists('GopY');
    }
}
