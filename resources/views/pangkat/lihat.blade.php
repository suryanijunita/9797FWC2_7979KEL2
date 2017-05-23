@extends('index')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Detail Data Pangkat</h3>
          <div class="section-title-divider"></div>
         </div>
      </div>
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('pangkat')}}"><i style="color:8a6d3b" class="fa text-default fa-chevron-left"></i></a>
		Detail Data Pangkat</strong>
		</div>
		<table class="table">
		<tr>
			<td>Nama Pangkat</td>
			<td>:</td>
			<td>{{$pangkat->nama_pangkat}}</td>
		</tr>
		<tr>
			<td>Penghasilan</td>
			<td>:</td>
			<td>{{$pangkat->gaji}}</td>
		</tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pangkat->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diubah Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pangkat->update_at}}</td>
		</tr>
		</table>
		</div>
@stop