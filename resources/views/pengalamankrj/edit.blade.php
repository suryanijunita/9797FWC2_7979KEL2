@extends('index1')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Update Data Pengalaman Kerja </h3>
          <div class="section-title-divider"></div>
         </div>
      </div>
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('pengalamankrj')}}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data Pengalaman Kerja</strong>
	</div>
	{!! Form::model($pengalamankrj,['url'=>'pengalamankrj/edit/'.$pengalamankrj->id,'class'=>'form-horizontal']) !!}
	@include('pengalamankrj.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop