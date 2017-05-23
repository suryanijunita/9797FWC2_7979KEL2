@extends('index1')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('prestasi')}}"><i style="color:8a6d3b" class="fa text-default fa-chevron-left"></i></a>
		Detail Data Prestasi</strong>
		</div>
		<table class="table">
		<tr>
			<td>Pegawai ID</td>
			<td>:</td>
			<td>{{ $prestasi->pegawai_id }}</td>
		</tr>	
		<tr>
			<td>Tanggal Prestasi</td>
			<td>:</td>
			<td>{{$prestasi->tgl_prestasi}}</td>
		</tr>
		<tr>
			<td>Nama Prestasi</td>
			<td>:</td>
			<td>{{$prestasi->nama_prestasi}}</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td>{{$prestasi->keterangan}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$prestasi->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diubah Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$prestasi->update_at}}</td>
		</tr>
		</table>
		</div>
@stop