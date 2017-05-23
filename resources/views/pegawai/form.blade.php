<div class="form-group">
<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
	{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label" id="pegawai_id">Jenis Kelamin</label>
		<div class="col-sm-10">
		{!! Form::select('pegawai_id',$pegawai->listJeniskelamin(),null,['class'=>'form-control','id' => 'pegawai_id','placeholder'=>"Jenis Kelamin"]) !!}
		
	</div>	
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Tempat Lahir</label>
	<div class="col-sm-10">
	{!! Form::text('tmpt_lahir',null,['class'=>'form-control','placeholder'=>"Tempat Lahir"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal Lahir</label>
	<div class="col-sm-10">
	{!! Form::date('tgl_lahir',null,['class'=>'form-control','placeholder'=>"Tanggal Lahir"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Agama</label>
	<div class="col-sm-10">
	{!! Form::text('agama',null,['class'=>'form-control','placeholder'=>"Agama"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">No Handphone</label>
	<div class="col-sm-10">
	{!! Form::text('nohp',null,['class'=>'form-control','placeholder'=>"No Handphone"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Email</label>
	<div class="col-sm-10">
	{!! Form::text('email',null,['class'=>'form-control','placeholder'=>"Email"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
	{!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal Masuk</label>
	<div class="col-sm-10">
	{!! Form::date('tgl_masuk',null,['class'=>'form-control','placeholder'=>"Tanggal Masuk"]) !!}
	</div>
	</div>