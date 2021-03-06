@extends('index')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('pengguna')}}"><i style="color:8a6d3b" class="fa text-default fa-chevron-left"></i></a>
		Detail Data Pengguna</strong>
		</div>
		<table class="table">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{$pengguna->username}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{$pengguna->password}}</td>
		</tr>
		<tr>
			<td>Level</td>
			<td>:</td>
			<td>{{$pengguna->level}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pengguna->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diubah Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$pengguna->update_at}}</td>
		</tr>
		</table>
		</div>
@stop