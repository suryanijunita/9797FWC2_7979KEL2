<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Prestasi;
use App\Pegawai;
use App\Http\Requests\PrestasiRequest;
class PrestasiController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi'; //
    public function awal()
    {
       $semuaPrestasi = Prestasi::all();//
        return view('prestasi.awal', compact('semuaPrestasi'));
    }

    public function tambah()
    {
            
        $pegawai = new Pegawai;
       
        return view('prestasi.tambah',compact('pegawai'));
 
    }

    public function simpan(PrestasiRequest $input)
    {
        /*$pengguna = new Pengguna($input->only('username','password'));

          */ 
          
                $prestasi = new Prestasi($input->only('pegawai_id'));
                $prestasi->tgl_prestasi = $input->tgl_prestasi;
                $prestasi->nama_prestasi = $input->nama_prestasi;
                $prestasi->keterangan = $input->keterangan;
                if ($prestasi->save()) $this->informasi = 'Prestasi Berhasil Di Simpan';
        
                 
        return redirect ('prestasi')->with(['informasi'=>$this->informasi]);

   }

    public function edit($id)
    {
        $prestasi = Prestasi::find($id);
         $pegawai = new Pegawai;
        return view('prestasi.edit',compact('pegawai','prestasi'));
    }

    public function lihat($id)
    {
        $prestasi = Prestasi::find($id);
        return view('prestasi.lihat')->with(array('prestasi'=>$prestasi));
    }

    public function update($id, PrestasiRequest $input)
    {
       $prestasi = Prestasi::find($id);
       $prestasi->pegawai_id=$input->pegawai_id;
        $prestasi->tgl_prestasi = $input->tgl_prestasi;
        $prestasi->nama_prestasi = $input->nama_prestasi;
        $prestasi->keterangan = $input->keterangan;
        $informasi=$prestasi->save()?'Berhasil Update':'Gagal Update Data';
        
        return redirect('prestasi')->with(['informasi' => $this->informasi]);
    }

    public function hapus($id)
    {
        $prestasi = prestasi::find($id);
        $informasi = $prestasi->delete()? 'Berhasil hapus data' : 'gagal hapus data';
        return redirect('prestasi')-> with(['informasi'=>$this->informasi]);
      }
}
