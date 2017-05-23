<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lokasikerja;
use App\Http\Requests\LokasikerjaRequest;

class LokasikerjaController extends Controller
{
    public function awal(){
      return view('lokasikerja.awal',['data'=>Lokasikerja::all()]);
    }

    public function tambah(){
      return view('lokasikerja.tambah');
    }
    public function simpan(LokasikerjaRequest $input){
       /* $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
        ]);*/
        $lokasikerja = new lokasikerja;  
        $lokasikerja->nm_lokasi=$input->nm_lokasi;
        $lokasikerja->alamat_lokasi=$input->alamat_lokasi;
        $informasi=$lokasikerja->save()?'Berhasil simpan data' :'Gagal simpan data';
        return redirect ('lokasikerja')->with(['informasi'=>$informasi]);
    }
    
    public function edit($id)
    {
        $lokasikerja=Lokasikerja::find($id);
        return view ('lokasikerja.edit')->with(array('lokasikerja'=>$lokasikerja));
    }
    public function lihat($id)
    {
        $lokasikerja=lokasikerja::find($id);
        return view('lokasikerja.lihat')->with(array('lokasikerja'=>$lokasikerja));
    }
    public function update ($id,LokasikerjaRequest $input)
    {
     /*   $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
        ]);*/
        $lokasikerja= lokasikerja::find($id);
        $lokasikerja->nm_lokasi=$input->nm_lokasi; 
        $lokasikerja->alamat_lokasi=$input->alamat_lokasi;       
        $informasi=$lokasikerja->save()?'Berhasil simpan data' :'Gagal update data';
        return redirect ('lokasikerja')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $lokasikerja = lokasikerja::find($id);
        $informasi=$lokasikerja->delete()? 'Berhasil hapus data':'Gagal hapus data';
        return redirect ('lokasikerja')->with(['informasi'=>$informasi]);
    } 
}
