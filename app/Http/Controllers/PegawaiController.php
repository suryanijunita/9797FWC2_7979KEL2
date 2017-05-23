<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pegawai;
use App\Http\Requests\PegawaiRequest;
class PegawaiController extends Controller
{
     public function awal(){
      return view('pegawai.awal',['data'=>Pegawai::all()]);
    }

    public function tambah(){
      return view('pegawai.tambah');
    }
    public function simpan(PegawaiRequest $input){
       /* $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
        ]);*/
        $pegawai = new pegawai;  
        $pegawai->nama=$input->nama;
        $pegawai->jeniskelamin=$input->jeniskelamin;
        $pegawai->tmpt_lahir=$input->tmpt_lahir;
        $pegawai->tgl_lahir=$input->tgl_lahir;
        $pegawai->agama=$input->agama;
        $pegawai->nohp=$input->nohp;
        $pegawai->email=$input->email;
        $pegawai->alamat=$input->alamat;
        $pegawai->tgl_masuk=$input->tgl_masuk;
        $informasi=$pegawai->save()?'Berhasil simpan data' :'Gagal simpan data';
        return redirect ('pegawai')->with(['informasi'=>$informasi]);
    }
    
    public function edit($id)
    {
        $pegawai=Pegawai::find($id);
        return view ('pegawai.edit')->with(array('pegawai'=>$pegawai));
    }
    public function lihat($id)
    {
        $pegawai=pegawai::find($id);
        return view('pegawai.lihat')->with(array('pegawai'=>$pegawai));
    }
    public function update ($id,PegawaiRequest $input)
    {
        /*$this->validate($input,[
            'username'=>'required',
            'password'=>'required',
        ]);*/
        $pegawai= pegawai::find($id);
        $pegawai->nama=$input->nama;
        $pegawai->jeniskelamin=$input->jeniskelamin;
        $pegawai->tmpt_lahir=$input->tmpt_lahir;
        $pegawai->tgl_lahir=$input->tgl_lahir;
        $pegawai->agama=$input->agama;
        $pegawai->nohp=$input->nohp;
        $pegawai->email=$input->email;
        $pegawai->alamat=$input->alamat;
        $pegawai->tgl_masuk=$input->tgl_masuk;
        $informasi=$pegawai->save()?'Berhasil simpan data' :'Gagal update data';
        return redirect ('pegawai')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $pegawai = pegawai::find($id);
        $informasi=$pegawai->delete()? 'Berhasil hapus data':'Gagal hapus data';
        return redirect ('pegawai')->with(['informasi'=>$informasi]);
    }
}
