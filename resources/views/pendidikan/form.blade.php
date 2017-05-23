<div class="form-group">
	<label class="col-sm-2 control-label" id="pegawai_id">Pegawai</label>
		<div class="col-sm-10">
		{!! Form::select('pegawai_id',$pegawai->listPegawai(),null,['class'=>'form-control','id' => 'pegawai_id','placeholder'=>"Pegawai"]) !!}
		
	</div>	
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Tahun Pendidikan</label>
	<div class="col-sm-10">
	{!! Form::text('thn_pendidikan',null,['class'=>'form-control','placeholder'=>"Tahun Pendidikan"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Jenjang Pendidikan</label>
	<div class="col-sm-10">
	{!! Form::text('jenjang',null,['class'=>'form-control','placeholder'=>"Jenjang Pendidikan"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Tempat Pendidikan</label>
	<div class="col-sm-10">
	{!! Form::text('nama_pendidikan',null,['class'=>'form-control','placeholder'=>"Tempat Pendidikan"]) !!}
	</div>
	</div>
	