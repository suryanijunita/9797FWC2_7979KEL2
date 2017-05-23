<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pegawai;
use App\Pengalamankrj;
use App\Http\Requests\PengalamankrjRequest;
class PengalamankrjController extends Controller
{
 protected $informasi = 'Gagal melakukan aksi'; //
    public function awal()
    {
       $semuaPengalamankrj = Pengalamankrj::all();//
        return view('pengalamankrj.awal', compact('semuaPengalamankrj'));
    }

    public function tambah()
    {
            
        $pegawai = new Pegawai;
        return view('pengalamankrj.tambah',compact('pegawai'));
 
    }

    public function simpan(PengalamankrjRequest $input)
    {
        $pengalamankrj = new pengalamankrj($input->only('pegawai_id'));
        $pengalamankrj->thn_kerja = $input->thn_kerja;
        $pengalamankrj->tmpt_kerja = $input->tmpt_kerja;
        if ($pengalamankrj->save()) $this->informasi = 'pengalamankrj Berhasil Di Simpan';
        return redirect ('pengalamankrj')->with(['informasi'=>$this->informasi]);

   }

    public function edit($id)
    {
        $pengalamankrj = Pengalamankrj::find($id);
        $pegawai = new Pegawai;
        return view('pengalamankrj.edit',compact('pegawai','pengalamankrj'));
    }

    public function lihat($id)
    {
        $pengalamankrj = pengalamankrj::find($id);
        return view('pengalamankrj.lihat')->with(array('pengalamankrj'=>$pengalamankrj));
    }

    public function update($id, PengalamankrjRequest $input)
    {
       $pengalamankrj = pengalamankrj::find($id);
       $pengalamankrj->pegawai_id=$input->pegawai_id;
       $pengalamankrj->thn_kerja = $input->thn_kerja;
       $pengalamankrj->tmpt_kerja = $input->tmpt_kerja;
       $informasi=$pengalamankrj->save()?'Berhasil Update':'Gagal Update Data';
       return redirect('pengalamankrj')->with(['informasi' => $this->informasi]);
    }

    public function hapus($id)
    {
        $pengalamankrj = pengalamankrj::find($id);
        $informasi = $pengalamankrj->delete()? 'Berhasil hapus data' : 'gagal hapus data';
        return redirect('pengalamankrj')-> with(['informasi'=>$this->informasi]);
      
}
