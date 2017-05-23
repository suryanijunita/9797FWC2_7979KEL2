<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
/*use App\Http\Dosen;
use App\Http\Matakuliah;*/

class PendidikanRequest extends Request
{
    public function authorize()
    {
    	return true;
    }
    public function rules()
    {
    	$validasi = [
        'thn_pendidikan'=>'required',
    	'jenjang'=>'required',
        'nama_pendidikan'=>'required'
        ];
    
    return $validasi;
    }
}
