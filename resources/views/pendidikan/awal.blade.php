@extends('index1')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Data Pendidikan </h3>
          <div class="section-title-divider"></div>
         </div>
      </div>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>------------------</strong>
		<a href="{{url('pendidikan/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> pendidikan</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				
				<th>No</th>
				<th>Nama Pegawai</th>
				<th>Tahun Pendidikan</th>
				<th>Jenjang Pendidikan</th>
				<th>Tempat Pendidkan</th>
				<th>Aksi</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaPendidikan as $pendidikan)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $pendidikan->pegawai->nama or 'Nama kosong' }}</td>
				<td>{{ $pendidikan->thn_pendidikan or 'Tanggal pendidikan kosong' }}</td>
				<td>{{ $pendidikan->jenjang or 'Jenjang pendidikan kosong' }}</td>
				<td>{{ $pendidikan->nama_pendidikan or 'Tempat pendidikan kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('pendidikan/edit/'.$pendidikan->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('pendidikan/lihat/'.$pendidikan->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('pendidikan/hapus/'.$pendidikan->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop