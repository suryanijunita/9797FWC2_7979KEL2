<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
/*use App\Http\Dosen;
use App\Http\Matakuliah;*/

class PegawaiRequest extends Request
{
    public function authorize()
    {
    	return true;
    }
    public function rules()
    {
    	$validasi = [
        'nama'=>'required',
        'jeniskelamin'=>'required',
        '$pegawai'=>'required',
        'tgl_lahir'=>'required',
        'agama'=>'required',
        'nohp'=>'required',
        'email'=>'required',
        'alamat'=>'required',
        'tgl_masuk'=>'required'
    	
        ];
    
    return $validasi;
    }
}
