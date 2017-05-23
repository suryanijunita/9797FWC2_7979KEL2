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
		<a href="{{url('unitkerja/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Unit Kerja </a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Unit Kerja</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $unitkerja)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $unitkerja->nama_unit or 'nama unit kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('unitkerja/edit/'.$unitkerja->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('unitkerja/lihat/'.$unitkerja->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('unitkerja/hapus/'.$unitkerja->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop