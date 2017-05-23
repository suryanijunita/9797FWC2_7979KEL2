<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
/*use App\Http\Dosen;
use App\Http\Matakuliah;*/

class PengalamankrjRequest extends Request
{
    public function authorize()
    {
    	return true;
    }
    public function rules()
    {
    	$validasi = [
        'username'=>'required',
        'password'=>'required',
    	'level'=>'required'
        ];
    
    return $validasi;
    }
}
