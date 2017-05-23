<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table ='jabatan';
    public function skkrj()
    {
    	return $this->hasOne(Skkrj::class,'skkrj_id');
    }

    public function listJabatan(){
        $out = [];
        foreach ($this->all() as $jabatan) {
            $out[$jabatan->id] = "{$jabatan->nama_jabatan} )";
        }
        return $out;
}
}
