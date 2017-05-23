<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pegawai;
use App\Pendidikan;
use App\Http\Requests\PendidikanRequest;
class PendidikanController extends Controller
{
  protected $informasi = 'Gagal melakukan aksi'; //
    public function awal()
    {
       $semuaPendidikan = Pendidikan::all();//
        return view('pendidikan.awal', compact('semuaPendidikan'));
    }

    public function tambah()
    {
            
        $pegawai = new Pegawai;
        return view('pendidikan.tambah',compact('pegawai'));
 
    }

    public function simpan(PendidikanRequest $input)
    {
        $pendidikan = new pendidikan($input->only('pegawai_id'));
        $pendidikan->thn_pendidikan = $input->thn_pendidikan;
        $pendidikan->jenjang = $input->jenjang;
        $pendidikan->nama_pendidikan = $input->nama_pendidikan;
        if ($pendidikan->save()) $this->informasi = 'pendidikan Berhasil Di Simpan';
        return redirect ('pendidikan')->with(['informasi'=>$this->informasi]);

   }

    public function edit($id)
    {
        $pendidikan = Pendidikan::find($id);
        $pegawai = new Pegawai;
        return view('pendidikan.edit',compact('pegawai','pendidikan'));
    }

    public function lihat($id)
    {
        $pendidikan = pendidikan::find($id);
        return view('pendidikan.lihat')->with(array('pendidikan'=>$pendidikan));
    }

    public function update($id, PendidikanRequest $input)
    {
       $pendidikan = pendidikan::find($id);
       $pendidikan->pegawai_id=$input->pegawai_id;
       $pendidikan->thn_pendidikan = $input->thn_pendidikan;
        $pendidikan->jenjang = $input->jenjang;
       $pendidikan->nama_pendidikan = $input->nama_pendidikan;
       $informasi=$pendidikan->save()?'Berhasil Update':'Gagal Update Data';
       return redirect('pendidikan')->with(['informasi' => $this->informasi]);
    }

    public function hapus($id)
    {
        $pendidikan = pendidikan::find($id);
        $informasi = $pendidikan->delete()? 'Berhasil hapus data' : 'gagal hapus data';
        return redirect('pendidikan')-> with(['informasi'=>$this->informasi]);
      }
}
