<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
/*use App\Http\Dosen;
use App\Http\Matakuliah;*/

class LokasikerjaRequest extends Request
{
    public function authorize()
    {
    	return true;
    }
    public function rules()
    {
    	$validasi = [
    	'nm_lokasi'=>'required',
    	'alamat_lokasi'=>'required'
        ];
    
    return $validasi;
    }
}
