@extends('index1')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Data User Login </h3>
          <div class="section-title-divider"></div>
         </div>
      </div>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>------------------</strong>
		<a href="{{url('pegawai/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Pegawai</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Agama</th>
				<th>No Handphone</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Tanggal Masuk</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $pegawai)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $pegawai->nama or 'Nama kosong' }}</td>
				<td>{{ $pegawai->jeniskelamin or 'Jenis Kelamin kosong' }}</td>
				<td>{{ $pegawai->tmpt_lahir or 'Tempat Lahir kosong' }}</td>
				<td>{{ $pegawai->tgl_lahir or 'Tanggal Lahir kosong' }}</td>
				<td>{{ $pegawai->agama or 'Agama kosong' }}</td>
				<td>{{ $pegawai->nohp or 'No Handphone kosong' }}</td>
				<td>{{ $pegawai->email or 'Email kosong' }}</td>
				<td>{{ $pegawai->alamat or 'Alamat kosong' }}</td>
				<td>{{ $pegawai->tgl_masuk or 'Tanggal Masuk kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('pegawai/edit/'.$pegawai->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('pegawai/lihat/'.$pegawai->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('pegawai/hapus/'.$pegawai->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop