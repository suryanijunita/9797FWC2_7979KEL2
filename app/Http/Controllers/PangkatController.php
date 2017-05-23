<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pangkat;
use App\Http\Requests\PangkatRequest;
class PangkatController extends Controller
{
    public function awal(){
      return view('pangkat.awal',['data'=>Pangkat::all()]);
    }

    public function tambah(){
      return view('pangkat.tambah');
    }
    public function simpan(PangkatRequest $input){
       /* $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
        ]);*/
        $pangkat = new pangkat;  
        $pangkat->nama_pangkat=$input->nama_pangkat;
        $informasi=$pangkat->save()?'Berhasil simpan data' :'Gagal simpan data';
        return redirect ('pangkat')->with(['informasi'=>$informasi]);
    }
    
    public function edit($id)
    {
        $pangkat=Pangkat::find($id);
        return view ('pangkat.edit')->with(array('pangkat'=>$pangkat));
    }
    public function lihat($id)
    {
        $pangkat=pangkat::find($id);
        return view('pangkat.lihat')->with(array('pangkat'=>$pangkat));
    }
    public function update ($id,PangkatRequest $input)
    {
     /*   $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
        ]);*/
        $pangkat= pangkat::find($id);
        $pangkat->nama_pangkat=$input->nama_pangkat;       
        $informasi=$pangkat->save()?'Berhasil simpan data' :'Gagal update data';
        return redirect ('pangkat')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $pangkat = pangkat::find($id);
        $informasi=$pangkat->delete()? 'Berhasil hapus data':'Gagal hapus data';
        return redirect ('pangkat')->with(['informasi'=>$informasi]);
    }
}
