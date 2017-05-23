@extends('index')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title"> Data Lokasi Kerja</h3>
          <div class="section-title-divider"></div>
         </div>
      </div>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>------------------</strong>
		<a href="{{url('lokasikerja/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Lokasi Kerja </a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Lokasi</th>
				<th>Alamat Lokasi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $lokasikerja)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $lokasikerja->nm_lokasi or 'Nama lokasi kosong' }}</td>
				<td>{{ $lokasikerja->alamat_lokasi or 'Alamat lokasi kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('lokasikerja/edit/'.$lokasikerja->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('lokasikerja/lihat/'.$lokasikerja->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('lokasikerja/hapus/'.$lokasikerja->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop