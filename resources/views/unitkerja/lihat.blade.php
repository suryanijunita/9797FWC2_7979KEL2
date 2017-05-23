@extends('index')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Detail Data Unit Kerja </h3>
          <div class="section-title-divider"></div>
         </div>
      </div>
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('unitkerja')}}"><i style="color:8a6d3b" class="fa text-default fa-chevron-left"></i></a>
		Detail Data Unit Kerja</strong>
		</div>
		<table class="table">
		<tr>
			<td>Nama Unit Kerja</td>
			<td>:</td>
			<td>{{$unitkerja->nama_unit}}</td>
		</tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$unitkerja->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diubah Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$unitkerja->update_at}}</td>
		</tr>
		</table>
		</div>
@stop