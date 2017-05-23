<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePengalamankrj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalamankrj', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pegawai_id',false,true);
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
            $table->char('thn_kerja',5);
            $table->char('tmpt_kerja',32);
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
        Schema::drop('pengalamankrj');
    }
}
