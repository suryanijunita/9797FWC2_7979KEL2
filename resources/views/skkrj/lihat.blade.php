@extends('index1')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('skkrj')}}"><i style="color:8a6d3b" class="fa text-default fa-chevron-left"></i></a>
		Detail Data skkrj</strong>
		</div>
		<table class="table">
		<tr>
			<td>Pegawai ID</td>
			<td>:</td>
			<td>{{ $skkrj->pegawai_id }}</td>
		</tr>	
		<tr>
			<td>Jabatan ID</td>
			<td>:</td>
			<td>{{ $skkrj->jabatan_id }}</td>
		</tr>	
		<tr>
			<td>Lokasi Kerja ID</td>
			<td>:</td>
			<td>{{ $skkrj->lokasikerja_id }}</td>
		</tr>
		<tr>
			<td>Pangkat ID</td>
			<td>:</td>
			<td>{{ $skkrj->pangkat_id }}</td>
		</tr>
		<tr>
			<td>Unit Kerja ID</td>
			<td>:</td>
			<td>{{ $skkrj->unitkerja_id }}</td>
		</tr>			
		<tr>
			<td>Tanggal SK</td>
			<td>:</td>
			<td>{{$skkrj->tgl_sk}}</td>
		</tr>
		<tr>
			<td>Status SK</td>
			<td>:</td>
			<td>{{$skkrj->status_sk}}</td>
		</tr>
		
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$skkrj->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diubah Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$skkrj->update_at}}</td>
		</tr>
		</table>
		</div>
@stop