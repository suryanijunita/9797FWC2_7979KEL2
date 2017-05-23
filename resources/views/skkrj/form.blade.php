	<div class="form-group">
	<label class="col-sm-2 control-label" id="pegawai_id">Pegawai</label>
		<div class="col-sm-10">
		{!! Form::select('pegawai_id',$pegawai->listPegawai(),null,['class'=>'form-control','id' => 'pegawai_id','placeholder'=>"Pegawai"]) !!}
		
	</div>	
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label" id="jabatan_id">Jabatan</label>
		<div class="col-sm-10">
		{!! Form::select('jabatan_id',$jabatan->listJabatan(),null,['class'=>'form-control','id' => 'jabatan_id','placeholder'=>"Jabatan"]) !!}	
	</div>	
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label" id="lokasikerja_id">Lokasi kerja</label>
		<div class="col-sm-10">
		{!! Form::select('lokasikerja_id',$lokasikerja->listLokasikerja(),null,['class'=>'form-control','id' => 'lokasikerja_id','placeholder'=>"Lokasi kerja"]) !!}
	</div>	
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label" id="pangkat_id">Pangkat</label>
		<div class="col-sm-10">
		{!! Form::select('pangkat_id',$pangkat->listPangkat(),null,['class'=>'form-control','id' => 'pangkat_id','placeholder'=>"pangkat"]) !!}
	</div>	
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label" id="unitkerja_id">Unit Kerja</label>
		<div class="col-sm-10">
		{!! Form::select('unitkerja_id',$unitkerja->listUnitkerja(),null,['class'=>'form-control','id' => 'unitkerja_id','placeholder'=>"unitkerja"]) !!}
	</div>	
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal SK</label>
	<div class="col-sm-10">
	{!! Form::date('tgl_sk',null,['class'=>'form-control','placeholder'=>"Tanggal SK"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label" id="unitkerja_id">Status SK</label>
		<div class="col-sm-10">
		{!! Form::select('skkrj_id',$skkrj->liststatus(),null,['class'=>'form-control','id' => 'skkrj_id','placeholder'=>"Status SK"]) !!}
	</div>	
	</div>