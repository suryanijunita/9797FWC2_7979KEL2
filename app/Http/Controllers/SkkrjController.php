<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pegawai;
use App\Jabatan;
use App\Lokasikerja;
use App\Pangkat;
use App\Skkrj;
use App\Unitkerja;
use App\Http\Requests\SkkrjRequest;
class SkkrjController extends Controller
{
     protected $informasi = 'Gagal melakukan aksi'; //
    public function awal()
    {
       $semuaSkkrj = Skkrj::all();//
        return view('skkrj.awal', compact('semuaSkkrj'));
    }

    public function tambah()
    {
            
        $pegawai = new Pegawai;
        $jabatan = new Jabatan;
        $lokasikerja = new Lokasikerja;
        $pangkat = new Pangkat;
        $unitkerja = new Unitkerja;
        $skkrj = new skkrj;
       
        return view('skkrj.tambah',compact('pegawai','jabatan','lokasikerja','pangkat','skkrj','unitkerja'));
 
    }

    public function simpan(SkkrjRequest $input)
    {
        /*$pengguna = new Pengguna($input->only('username','password'));

          */ 
          
                $skkrj = new skkrj($input->only('pegawai_id','jabatan_id','lokasikerja_id','pangkat_id','unitkerja_id','skkrj_id'));
                $skkrj->tgl_sk = $input->tgl_sk;
                $skkrj->status_sk = $input->status_sk;
                if ($skkrj->save()) $this->informasi = 'skkrj Berhasil Di Simpan';
        
                 
        return redirect ('skkrj')->with(['informasi'=>$this->informasi]);

   }

    public function edit($id)
    {
        $skkrj = Skkrj::find($id);
        $pegawai = new Pegawai;
        $jabatan = new Jabatan;
        $lokasikerja = new Lokasikerja;
        $pangkat = new Pangkat;
        $unitkerja = new Unitkerja;
        return view('skkrj.edit',compact('pegawai','skkrj','jabatan','lokasikerja','pangkat','unitkerja'));
    }

    public function lihat($id)
    {
        $skkrj = skkrj::find($id);
        return view('skkrj.lihat')->with(array('skkrj'=>$skkrj));
    }

    public function update($id, SkkrjRequest $input)
    {
       $skkrj = skkrj::find($id);
       $skkrj->pegawai_id=$input->pegawai_id;
       $skkrj->jabatan_id=$input->jabatan_id;
       $skkrj->lokasikerja_id=$input->lokasikerja_id;
       $skkrj->pangkat_id=$input->pangkat_id;
       $skkrj->unitkerja_id=$input->unitkerja_id;
        $skkrj->tgl_sk = $input->tgl_sk;
        $skkrj->status_sk = $input->status_sk;
        $informasi=$skkrj->save()?'Berhasil Update':'Gagal Update Data';
        
        return redirect('skkrj')->with(['informasi' => $this->informasi]);
    }

    public function hapus($id)
    {
        $skkrj = skkrj::find($id);
        $informasi = $skkrj->delete()? 'Berhasil hapus data' : 'gagal hapus data';
              
        
        return redirect('skkrj')-> with(['informasi'=>$this->informasi]);
      }
      
}
