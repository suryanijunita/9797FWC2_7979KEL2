<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table ='prestasi';
       protected $fillable = ['pegawai_id','tgl_prestasi','nama_prestasi'];


       public function pegawai()//fungsi pengguna untuk menentukan hubungan pada model user
{
    	return $this->belongsTo(Pegawai::class);  //untuk mendifinisikan nilai kembalian ke model dosen memiliki relasi dengan data pengguna
}

}







 