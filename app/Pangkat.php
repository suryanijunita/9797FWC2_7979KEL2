<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    protected $table ='pangkat';
     public function skkrj()
    {
    	return $this->hasMany(Skkrj::class,'skkrj_id');
    }
    public function listPangkat(){
        $out = [];
        foreach ($this->all() as $pangkat) {
            $out[$pangkat->id] = "{$pangkat->nama_pangkat} )";
        }
        return $out;
}
}
