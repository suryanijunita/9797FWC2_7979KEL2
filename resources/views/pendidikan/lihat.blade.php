@extends('index1')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('pendidikan')}}"><i style="color:8a6d3b" class="fa text-default fa-chevron-left"></i></a>
		Detail Data Pendidikan</strong>
		</div>
		<table class="table">
		<tr>
			<td>Pegawai ID</td>
			<td>:</td>
			<td>{{ $pendidikan->pegawai_id }}</td>
		</tr>	
		<tr>
			<td>Tahun Pendidikan</td>
			<td>:</td>
			<td>{{$pendidikan->thn_pendidikan}}</td>
		</tr>
		<tr>
			<td>Jenjang Pendidikan</td>
			<td>:</td>
			<td>{{$pendidikan->jenjang}}</td>
		</tr>
		<tr>
			<td>Tempat Pendidikan</td>
			<td>:</td>
			<td>{{$pendidikan->nama_pendidikan}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pendidikan->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diubah Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pendidikan->update_at}}</td>
		</tr>
		</table>
		</div>
@stop