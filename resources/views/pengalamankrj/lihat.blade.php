@extends('index1')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('pengalamankrj')}}"><i style="color:8a6d3b" class="fa text-default fa-chevron-left"></i></a>
		Detail Data pengalamankrj</strong>
		</div>
		<table class="table">
		<tr>
			<td>Pegawai ID</td>
			<td>:</td>
			<td>{{ $pengalamankrj->pegawai_id }}</td>
		</tr>	
		<tr>
			<td>Tahun Kerja</td>
			<td>:</td>
			<td>{{$pengalamankrj->thn_kerja}}</td>
		</tr>
		<tr>
			<td>Tempat Kerja</td>
			<td>:</td>
			<td>{{$pengalamankrj->tmpt_kerja}}</td>
		</tr>
		
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pengalamankrj->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diubah Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pengalamankrj->update_at}}</td>
		</tr>
		</table>
		</div>
@stop