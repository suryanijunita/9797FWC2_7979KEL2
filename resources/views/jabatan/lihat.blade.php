@extends('index')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Detail Data Jabatan </h3>
          <div class="section-title-divider"></div>
         </div>
      </div>
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('jabatan')}}"><i style="color:8a6d3b" class="fa text-default fa-chevron-left"></i></a>
		Detail Data Jabatan</strong>
		</div>
		<table class="table">
		<tr>
			<td>Nama Jabatan</td>
			<td>:</td>
			<td>{{$jabatan->nama_jabatan}}</td>
		</tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jabatan->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diubah Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jabatan->update_at}}</td>
		</tr>
		</table>
		</div>
@stop