<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasikerja extends Model
{
    protected $table ='lokasikerja';
     public function skkrj()
    {
    	return $this->hasOne(Skkrj::class,'skkrj_id');
    }
    public function listLokasikerja(){
        $out = [];
        foreach ($this->all() as $lokasikerja) {
            $out[$lokasikerja->id] = "{$lokasikerja->nm_lokasi} )";
        }
        return $out;
}
}
