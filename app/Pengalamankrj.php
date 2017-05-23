<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengalamankrj extends Model
{
    protected $table ='pengalamankrj';
    protected $fillable = ['pegawai_id','thn_kerja','tmpt_kerja'];

     public function pegawai()//fungsi pengguna untuk menentukan hubungan pada model user
{
    	return $this->belongsTo(Pegawai::class);  //untuk mendifinisikan nilai kembalian ke model dosen memiliki relasi dengan data pengguna
}
}
