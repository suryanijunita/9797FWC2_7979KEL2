<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unitkerja extends Model
{
    protected $table ='unitkerja';
     public function skkrj()
    {
    	return $this->hasMany(Skkrj::class,'skkrj_id');
    }

    public function listUnitkerja(){
        $out = [];
        foreach ($this->all() as $unitkerja) {
            $out[$unitkerja->id] = "{$unitkerja->nama_unit} )";
        }
        return $out;
}
}
