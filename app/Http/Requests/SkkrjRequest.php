<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
/*use App\Http\Dosen;
use App\Http\Matakuliah;*/

class SkkrjRequest extends Request
{
    public function authorize()
    {
    	return true;
    }
    public function rules()
    {
    	$validasi = [
        'pegawai_id'=>'required',
        'jabatan_id'=>'required',
        'lokasikerja_id'=>'required',
        'pangkat_id'=>'required',
        'unitkerja_id'=>'required',
    	'tgl_sk'=>'required',
    	'status_sk'=>'required'
        ];
    
    return $validasi;
    }
}
