<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
   protected $table ='pegawai';
 
    public function listPegawai(){
        $out = [];
        foreach ($this->all() as $pegawai) {
            $out[$pegawai->id] = "{$pegawai->nama} )";
        }
        return $out;
}
 public function listJeniskelamin(){
        $out = [];
        foreach ($this->all() as $pegawai) {
            $out[$pegawai->id] = "{$pegawai->jeniskelamin} )";
        }
        return $out;
}

public function prestasi()
 {
        return $this->hasMany(Prestasi::class,'prestasi_id');
 }
 public function pendidikan()
 {
        return $this->hasMany(Pendidikan::class,'pendidikan_id');
 }
 public function pengalamankrj()
 {
        return $this->hasMany(Pengalamankrj::class,'pengalamankrj_id');
 }
 public function skkrj()
 {
        return $this->hasMany(Skkrj::class,'skkrj_id');
 }
}

