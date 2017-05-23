<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePrestasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pegawai_id',false,true);
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
            $table->date('tgl_prestasi');
            $table->char('nama_prestasi',128);
            $table->char('keterangan',255);
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
        Schema::drop('prestasi');
    }
}
