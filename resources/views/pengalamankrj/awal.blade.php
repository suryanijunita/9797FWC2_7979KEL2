@extends('index1')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Data Pengalaman Kerja </h3>
          <div class="section-title-divider"></div>
         </div>
      </div>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>------------------</strong>
		<a href="{{url('pengalamankrj/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Pengalaman Kerja</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				
				<th>No</th>
				<th>Nama Pegawai</th>
				<th>Tahun Kerja</th>
				<th>Tempat Kerja</th>
				<th>Aksi</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaPengalamankrj as $pengalamankrj)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $pengalamankrj->pegawai->nama or 'Nama kosong' }}</td>
				<td>{{ $pengalamankrj->thn_kerja or 'Tahun Kerja kosong' }}</td>
				<td>{{ $pengalamankrj->tmpt_kerja or 'Tempat Kerja kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('pengalamankrj/edit/'.$pengalamankrj->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('pengalamankrj/lihat/'.$pengalamankrj->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('pengalamankrj/hapus/'.$pengalamankrj->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop