<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Skkrj extends Model
{
    protected $table ='skkrj';
    protected $fillable = ['pegawai_id','jabatan_id','lokasikerja_id','pangkat_id','unitkerja_id','tgl_sk','status_sk'];


      public function pegawai()//fungsi pengguna untuk menentukan hubungan pada model user
{
    	return $this->belongsTo(Pegawai::class);  //untuk mendifinisikan nilai kembalian ke model dosen memiliki relasi dengan data pengguna
}

    public function jabatan()//fungsi pengguna untuk menentukan hubungan pada model user
{
    	return $this->belongsTo(Jabatan::class);  //untuk mendifinisikan nilai kembalian ke model dosen memiliki relasi dengan data pengguna
}

public function lokasikerja()//fungsi pengguna untuk menentukan hubungan pada model user
{
    	return $this->belongsTo(Lokasikerja::class);  //untuk mendifinisikan nilai kembalian ke model dosen memiliki relasi dengan data pengguna
}

public function pangkat()//fungsi pengguna untuk menentukan hubungan pada model user
{
    	return $this->belongsTo(Pangkat::class);  //untuk mendifinisikan nilai kembalian ke model dosen memiliki relasi dengan data pengguna
}

public function unitkerja()//fungsi pengguna untuk menentukan hubungan pada model user
{
    	return $this->belongsTo(Unitkerja::class);  //untuk mendifinisikan nilai kembalian ke model dosen memiliki relasi dengan data pengguna
}
public function liststatus(){
        $out = [];
        foreach ($this->all() as $skkrj) {
            $out[$skkrj->id] = "{$skkrj->status_sk} )";
        }
        return $out;
}

}
