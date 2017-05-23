@extends('index1')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Data Surat Keterangan Kerja </h3>
          <div class="section-title-divider"></div>
         </div>
      </div>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>------------------</strong>
		<a href="{{url('skkrj/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Surat Keterangan Kerja</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				
				<th>No</th>
				<th>Nama Pegawai</th>
				<th>Jabatan Pegawai</th>
				<th>Lokasi Kerja Pegawai</th>
				<th>Pangkat Pegawai</th>
				<th>Unit Kerja Pegawai</th>
				<th>Tanggal SK Kerja </th>
				<th>Status SK Kerja </th>
				<th>Aksi</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaSkkrj as $skkrj)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $skkrj->pegawai->nama or 'Nama kosong' }}</td>
				<td>{{ $skkrj->jabatan->nama_jabatan or 'Nama Jabatan kosong' }}</td>
				<td>{{ $skkrj->lokasikerja->nm_lokasi or 'Nama Lokasi kosong' }}</td>
				<td>{{ $skkrj->pangkat->nama_pangkat or 'Nama Pangkat kosong' }}</td>
				<td>{{ $skkrj->unitkerja->nama_unit or 'Nama Unit kosong' }}</td>
				<td>{{ $skkrj->tgl_sk or 'Tanggal Surat kosong' }}</td>
				<td>{{ $skkrj->status_sk or 'Status Surat kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('skkrj/edit/'.$skkrj->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('skkrj/lihat/'.$skkrj->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('skkrj/hapus/'.$skkrj->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop