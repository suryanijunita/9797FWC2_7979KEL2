@extends('index')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Tambah Jabatan </h3>
          <div class="section-title-divider"></div>
         </div>
      </div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<strong><a href="{{ url('jabatan') }}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a> Tambah Data Jabatan</strong>
	<div class="clearfix"></div>
	
	</div>
	{!! Form::open(['url'=>'jabatan/simpan','class'=>'form-horizontal']) !!}
	@include('jabatan.form')
	<div  style="width:100%; text-align: right">
		<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div> 
@stop