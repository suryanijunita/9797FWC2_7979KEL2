<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nama',50);
            $table->enum('jeniskelamin',['Laki-laki','Perempuan']);
            $table->char('tmpt_lahir',32);
            $table->date('tgl_lahir');
            $table->char('agama',50);
            $table->char('nohp',13);
            $table->char('email',32);
            $table->text('alamat');
            $table->date('tgl_masuk');
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
        Schema::drop('pegawai');
    }
}
