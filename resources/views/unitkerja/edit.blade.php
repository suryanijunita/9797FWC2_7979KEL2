@extends('index')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Update Data Unit Kerja </h3>
          <div class="section-title-divider"></div>
         </div>
      </div>
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('unitkerja')}}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data Unit Kerja</strong>
	</div>
	{!! Form::model($unitkerja,['url'=>'unitkerja/edit/'.$unitkerja->id,'class'=>'form-horizontal']) !!}
	@include('unitkerja.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop