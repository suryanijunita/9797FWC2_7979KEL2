<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
/*use App\Http\Dosen;
use App\Http\Matakuliah;*/

class PrestasiRequest extends Request
{
    public function authorize()
    {
    	return true;
    }
    public function rules()
    {
    	$validasi = [
    	'tgl_prestasi'=>'required',
    	'nama_prestasi'=>'required'
        ];
    
    return $validasi;
    }
}
