<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableSkkrj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skkrj', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pegawai_id',false,true);
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
            $table->date('tgl_sk');
            $table->integer('jabatan_id',false,true);
            $table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('cascade');
            $table->integer('lokasikerja_id',false,true);
            $table->foreign('lokasikerja_id')->references('id')->on('lokasikerja')->onDelete('cascade');
            $table->integer('pangkat_id',false,true);
            $table->foreign('pangkat_id')->references('id')->on('pangkat')->onDelete('cascade');
            $table->integer('unitkerja_id',false,true);
            $table->foreign('unitkerja_id')->references('id')->on('unitkerja')->onDelete('cascade');
            $table->enum('status_sk',['aktif','tidak aktif']);
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
        Schema::drop('skkrj');
    }
}
