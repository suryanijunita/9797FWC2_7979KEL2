<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePendidikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pegawai_id',false,true);
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
            $table->char('thn_pendidikan',10);
            $table->char('jenjang',10);
            $table->char('nama_pendidikan',32);
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
        Schema::drop('pendidikan');
    }
}
