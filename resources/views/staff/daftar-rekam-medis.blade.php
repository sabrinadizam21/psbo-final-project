@extends('staff.master-staff')

@section('active-rm') active @endsection

@section('title-content') Daftar Rekam Medis
<form class="navbar panel-body" style="width: 40%; float: right;">
	<div class="input-group">
		<input type="text" value="" class="form-control" placeholder="Cari Mahasiswa">
		<span class="input-group-btn"><a href="#" type="button" class="btn btn-primary">Cari</a></span>
	</div>
</form>
@endsection

@section('subtitle-content') Mahasiswa @endsection

@section('main-content')
<!-- DAFTAR REKAM MEDIS MAHASISWA -->
<div class="panel-body no-padding">
	<table class="table table-striped">
		<thead>
			<tr>
				<th width="25%" style="text-align: left;">Nama</th>
				<th class="text-center">NIM</th>
				<th class="text-center">Umur</th>
				<th class="text-center">Jenis Kelamin</th>
				<th class="text-center">Status BPJS</th>
				<th style="text-align: left;">Rekam Medis</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="text-align: left;">Steve</td>
				<td>763648</td>
				<td>76</td>
				<td>Pria</td>
				<td><span class="label label-success">TERDAFTAR</span></td>
				<td><div class="col-md-6 text-center"><a href="{{url('/admin/rekam-medis/individu')}}" class="btn btn-info btn-sm"><span class="fa fa-search" ></span></a></div></td>
			</tr>
			<tr>
				<td style="text-align: left;">Jobs</td>
				<td>763648</td>
				<td>76</td>
				<td>Pria</td>
				<td><span class="label label-danger">BELUM TERDAFTAR</span></td>
				<td><div class="col-md-6 text-center"><a href="#" class="btn btn-info btn-sm"><span class="fa fa-search" ></span></a></div></td>
			</tr>
		</tbody>
	</table>
</div>
<!-- END REKAM MEDIS MAHASISWA -->
@endsection