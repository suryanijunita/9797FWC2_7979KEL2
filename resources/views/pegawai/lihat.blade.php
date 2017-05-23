@extends('index1')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('pegawai')}}"><i style="color:8a6d3b" class="fa text-default fa-chevron-left"></i></a>
		Detail Data Pegawai</strong>
		</div>
		<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$pegawai->nama}}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{$pegawai->jeniskelamin}}</td>
		</tr>
		<tr>
			<td>Tempat lahir</td>
			<td>:</td>
			<td>{{$pegawai->tmpt_lahir}}</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td>{{$pegawai->tgl_lahir}}</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>{{$pegawai->agama}}</td>
		</tr>
		<tr>
			<td>No Handphone</td>
			<td>:</td>
			<td>{{$pegawai->nohp}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>{{$pegawai->email}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$pegawai->alamat}}</td>
		</tr>
		<tr>
			<td>Tanggal Masuk</td>
			<td>:</td>
			<td>{{$pegawai->tgl_masuk}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pegawai->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diubah Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pegawai->update_at}}</td>
		</tr>
		</table>
		</div>
@stop