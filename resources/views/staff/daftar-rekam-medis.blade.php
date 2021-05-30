@extends('staff.master-staff')

@section('active-rm') active @endsection

@section('active-rm-1') active @endsection

@section('title-content') Daftar Rekam Medis @endsection

@section('subtitle-content') Mahasiswa @endsection

@section('main-content')
<form class="navbar" style="width: 40%;">
	<div class="input-group ">
		<input type="text" value="" class="form-control" placeholder="Cari Mahasiswa">
		<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
	</div>
</form>
<!-- DAFTAR REKAM MEDIS MAHASISWA -->
<div class="panel-body no-padding">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NIM</th>
				<th width="15%" class="text-center">Status BPJS</th>
				<th width="15%">Rekam Medis</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="vertical-align: middle;">Steve</td>
				<td style="vertical-align: middle;">763648</td>
				<td class="text-center" style="vertical-align: middle;"><span class="label label-success">TERDAFTAR</span></td>
				<td style="vertical-align: middle;"><div class="col-md-6 text-center"><a href="#" class="btn btn-info btn-sm"><span class="fa fa-search" ></span></a></div></td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td style="vertical-align: middle;">Jobs</td>
				<td style="vertical-align: middle;">763649</td>
				<td class="text-center" style="vertical-align: middle;"><span class="label label-danger">BELUM TERDAFTAR</span></td>
				<td style="vertical-align: middle;"><div class="col-md-6 text-center"><a href="#" class="btn btn-info btn-sm"><span class="fa fa-search" ></span></a></div></td>
			</tr>
		</tbody>
	</table>
</div>
<!-- END REKAM MEDIS MAHASISWA -->
@endsection