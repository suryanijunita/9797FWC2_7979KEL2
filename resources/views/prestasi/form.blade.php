<div class="form-group">
	<label class="col-sm-2 control-label" id="pegawai_id">Pegawai</label>
		<div class="col-sm-10">
		{!! Form::select('pegawai_id',$pegawai->listPegawai(),null,['class'=>'form-control','id' => 'pegawai_id','placeholder'=>"Pegawai"]) !!}
		
	</div>	
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal Prestasi</label>
	<div class="col-sm-10">
	{!! Form::date('tgl_prestasi',null,['class'=>'form-control','placeholder'=>"Tanggal Prestasi"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Nama Prestasi</label>
	<div class="col-sm-10">
	{!! Form::text('nama_prestasi',null,['class'=>'form-control','placeholder'=>"Nama Prestasi"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Keterangan</label>
	<div class="col-sm-10">
	{!! Form::text('keterangan',null,['class'=>'form-control','placeholder'=>"Keterangan"]) !!}
	</div>
	</div>
	