@extends('index')
@section('container')
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title"> Data Unit Kerja</h3>
          <div class="section-title-divider"></div>
         </div>
      </div>
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>------------------</strong>
		<a href="{{url('pangkat/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Pangkat </a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Pangkat</th>
				<th>Penghasilan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $pangkat)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $pangkat->nama_pangkat or 'nama pangkat kosong' }}</td>
				<td>{{ $pangkat->gaji or 'gaji kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('pangkat/edit/'.$pangkat->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('pangkat/lihat/'.$pangkat->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('pangkat/hapus/'.$pangkat->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop