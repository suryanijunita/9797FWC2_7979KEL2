<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jabatan;
use App\Http\Requests\JabatanRequest;

class JabatanController extends Controller
{
    public function awal(){
      return view('jabatan.awal',['data'=>Jabatan::all()]);
    }

    public function tambah(){
      return view('jabatan.tambah');
    }
    public function simpan(JabatanRequest $input){
       /* $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
        ]);*/
        $jabatan = new jabatan;  
        $jabatan->nama_jabatan=$input->nama_jabatan;
        $jabatan->gaji=$input->gaji;
        $informasi=$jabatan->save()?'Berhasil simpan data' :'Gagal simpan data';
        return redirect ('jabatan')->with(['informasi'=>$informasi]);
    }
    
    public function edit($id)
    {
        $jabatan=Jabatan::find($id);
        return view ('jabatan.edit')->with(array('jabatan'=>$jabatan));
    }
    public function lihat($id)
    {
        $jabatan=jabatan::find($id);
        return view('jabatan.lihat')->with(array('jabatan'=>$jabatan));
    }
    public function update ($id,JabatanRequest $input)
    {
     
        $jabatan= jabatan::find($id);
        $jabatan->nama_jabatan=$input->nama_jabatan;    
        $jabatan->gaji=$input->gaji;    
        $informasi=$jabatan->save()?'Berhasil simpan data' :'Gagal update data';
        return redirect ('jabatan')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $jabatan = jabatan::find($id);
        $informasi=$jabatan->delete()? 'Berhasil hapus data':'Gagal hapus data';
        return redirect ('jabatan')->with(['informasi'=>$informasi]);
    }
}
