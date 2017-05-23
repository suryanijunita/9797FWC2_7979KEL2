<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table ='pendidikan';

    protected $fillable = ['pegawai_id','thn_pendidikan','jenjang','nama_pendidikan'];


     public function pegawai()//fungsi pengguna untuk menentukan hubungan pada model user
{
    	return $this->belongsTo(Pegawai::class);  //untuk mendifinisikan nilai kembalian ke model dosen memiliki relasi dengan data pengguna
}
}
