<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Unitkerja;
use App\Http\Requests\UnitkerjaRequest;

class UnitkerjaController extends Controller
{
    public function awal(){
      return view('unitkerja.awal',['data'=>Unitkerja::all()]);
    }

    public function tambah(){
      return view('unitkerja.tambah');
    }
    public function simpan(UnitkerjaRequest $input){
       /* $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
        ]);*/
        $this->$validate($input,[
        'nama_unit'=>'required',
        ]);

        $unitkerja = new unitkerja;  
        $unitkerja->nama_unit=$input->nama_unit;
        $informasi=$unitkerja->save()?'Berhasil simpan data' :'Gagal simpan data';
        return redirect ('unitkerja')->with(['informasi'=>$informasi]);
    }
    
    public function edit($id)
    {
        $unitkerja=Unitkerja::find($id);
        return view ('unitkerja.edit')->with(array('unitkerja'=>$unitkerja));
    }
    public function lihat($id)
    {
        $unitkerja=unitkerja::find($id);
        return view('unitkerja.lihat')->with(array('unitkerja'=>$unitkerja));
    }
    public function update ($id,UnitkerjaRequest $input)
    {
     /*   $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
        ]);*/
        $unitkerja= unitkerja::find($id);
        $unitkerja->nama_unit=$input->nama_unit;        
        $informasi=$unitkerja->save()?'Berhasil simpan data' :'Gagal update data';
        return redirect ('unitkerja')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $unitkerja = unitkerja::find($id);
        $informasi=$unitkerja->delete()? 'Berhasil hapus data':'Gagal hapus data';
        return redirect ('unitkerja')->with(['informasi'=>$informasi]);
    }
}
