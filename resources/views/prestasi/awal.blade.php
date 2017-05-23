@extends('index1')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Data Prestasi</h3>
          <div class="section-title-divider"></div>
         </div>
      </div>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>------------------</strong>
		<a href="{{url('prestasi/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> prestasi</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				
				<th>No</th>
				<th>Nama Pegawai</th>
				<th>Tanggal Prestasi</th>
				<th>Nama Prestasi</th>
				<th>Keterangan</th>
				<th>Aksi</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaPrestasi as $prestasi)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $prestasi->pegawai->nama or 'Nama kosong' }}</td>
				<td>{{ $prestasi->tgl_prestasi or 'Tanggal Prestasi kosong' }}</td>
				<td>{{ $prestasi->nama_prestasi or 'Nama Prestasi kosong' }}</td>
				<td>{{ $prestasi->keterangan or 'Keterangan kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('prestasi/edit/'.$prestasi->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('prestasi/lihat/'.$prestasi->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('prestasi/hapus/'.$prestasi->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop