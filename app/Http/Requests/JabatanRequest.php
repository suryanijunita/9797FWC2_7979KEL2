<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
/*use App\Http\Dosen;
use App\Http\Matakuliah;*/

class JabatanRequest extends Request
{
    public function authorize()
    {
    	return true;
    }
    public function rules()
    {
    	$validasi = [
        'nama_jabatan'=>'required',
    	'gaji'=>'required'
        ];
    
    return $validasi;
    }
}
