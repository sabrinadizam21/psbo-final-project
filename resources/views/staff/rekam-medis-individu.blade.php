@extends('staff.master-staff')

@section('active-rm-1') active @endsection

@section('title-content') Rekam Medis @endsection

@section('subtitle-content') Mahasiswa @endsection

@section('main-content')
<div class="panel-profile">
	<div class="clearfix">
		<!-- LEFT COLUMN -->
		<div class="profile-left">
			<!-- PROFILE HEADER -->
			<div class="profile-header">
				<div class="overlay"></div>
				<div class="profile-main">
					<img src="{{asset('assets/img/user-medium.png')}}" class="img-circle" alt="Avatar">
					<h3 class="name">Samuel Gold</h3>
				</div>
			</div>
			<!-- END PROFILE HEADER -->
			<!-- PROFILE DETAIL -->
			<div class="profile-detail" style="padding-bottom: 0px !important;">
				<div class="profile-info">
					<ul class="list-unstyled list-justify">
						<ul class="list-unstyled list-justify">
							<li>NIM <span>G64000001</span></li>
							<li>Asal Daerah <span>Bogor</span></li>
							<li>Umur <span>21 Tahun</span></li>
							<li>Jenis Kelamin <span>Laki-laki</span></li>
						</ul>
					</ul>
				</div>
			</div>
			<!-- END PROFILE DETAIL -->
		</div>
		<!-- END LEFT COLUMN -->
		<!-- REKAM MEDIS -->
		<div class="profile-right">
			<!-- TABBED CONTENT -->
			<div class="custom-tabs-line tabs-line-bottom left-aligned">
				<ul class="nav" role="tablist">
					<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Hasil Periksa</a></li>
					<li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Riwayat Penyakit</a></li>
				</ul>
			</div>
			<!--Hasil Periksa-->
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tab-bottom-left1">
					<div class="panel-body no-padding">
						<table class="table table-striped">
							<thead>
								<tr>
									<th width="10%">Waktu Periksa</th>
									<th>Anamnesa & Diagnosa</th>
									<th>Therapie</th>
									<th>Dokter</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>16/9/2020 09:08:00</td>
									<td>Pemeriksaan</td>
									<td>Pemeriksaan</td>
									<td>Dr. A, S.Komp.</td>
									<td><button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#exampleModal">Edit</button><button type="button" class="btn btn-danger btn-xs">Hapus</button></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="margin-top-30 text-center"><a href="#" class="btn btn-default">Tambah</a></div>
					
				</div>
				<!-- End Hasil Periksa -->
				<!-- Riwayat Penyakit -->
				<div class="tab-pane fade" id="tab-bottom-left2">
					<div class="panel-body no-padding">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Penyakit</th>
									<th>Tahun</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Cantengan</td>
									<td>2015</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="margin-top-30 text-center"><a href="#" class="btn btn-default">Tambah</a></div>
				</div>
				<!--Riwayat Penyakit-->
			</div>
			<!-- END TABBED CONTENT -->
		</div>
		<!-- END REKAM MEDIS -->
		<!--START EDIT-->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h3 class="modal-title" id="exampleModalLabel">Edit</h3>
					</div>
					<div class="modal-body">
						<!-- INPUTS -->
						<div>
							<label><h4>Waktu Periksa</h4></label>
							<input type="text" class="form-control" placeholder="Waktu Periksa">
							<br>
							<label><h4>Anamnesa & Diagnosa</h4></label>
							<input type="text" class="form-control" placeholder="Anamnesa & Diagnosa">
							<br>
							<label><h4>Therapie</h4></label>
							<input type="text" class="form-control" placeholder="Therapie">
							<br>
							<label><h4>Dokter</h4></label>
							<input type="text" class="form-control" placeholder="Dokter">
						</div>				
						<!-- END INPUTS -->
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Simpan</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					</div>
				</div>
			</div>
		</div>
<!--END EDIT-->
	</div>
</div>
@endsection