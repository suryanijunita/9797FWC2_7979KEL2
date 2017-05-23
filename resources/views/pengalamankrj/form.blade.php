<div class="form-group">
	<label class="col-sm-2 control-label" id="pegawai_id">Pegawai</label>
		<div class="col-sm-10">
		{!! Form::select('pegawai_id',$pegawai->listPegawai(),null,['class'=>'form-control','id' => 'pegawai_id','placeholder'=>"Pegawai"]) !!}
		
	</div>	
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Tahun Kerja</label>
	<div class="col-sm-10">
	{!! Form::text('thn_kerja',null,['class'=>'form-control','placeholder'=>"Tahun Kerja"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Tempat Kerja</label>
	<div class="col-sm-10">
	{!! Form::text('tmpt_kerja',null,['class'=>'form-control','placeholder'=>"Tempat Kerja"]) !!}
	</div>
	</div>
	