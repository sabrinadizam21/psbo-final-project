@extends('staff.master-staff')

@section('active-rm-1') active @endsection

@section('title-content') Rekam Medis @endsection

@section('subtitle-content') Mahasiswa @endsection

@section('main-content')
<div class="panel-profile">
	<div class="clearfix">
		<!-- LEFT COLUMN
		<div class="profile-left">
			PROFILE HEADER 
			<form action="/admin/rekam-medis/individu/{{$user_individu->id}}" method="GET">
			@if(isset($user_individu)) 
			<div class="profile-header">
			@foreach($user_individu as $user_individu)
			{{csrf_field()}}
				<div class="overlay"></div>
				<div class="profile-main">
					<img src="{{asset('assets/img/user-medium.png')}}" class="img-circle" alt="Avatar">
				
					<h3 class="name">{{ $user_individu['name'] }}</h3>
					
				</div>
			</div>
			END PROFILE HEADER 
			PROFILE DETAIL
			<div class="profile-detail" style="padding-bottom: 0px !important;">
				<div class="profile-info">
					<ul class="list-unstyled list-justify">
						<ul class="list-unstyled list-justify">
							<li>NIM <span>{{ $user_individu['nim'] }}</span></li>
							<li>Asal Daerah <span>{{ $user_individu['alamat'] }}</span></li>
							<li>Umur <span>{{ $user_individu['umur'] }}</span></li>
							<li>Jenis Kelamin <span>{{ $user_individu['jenis_kelamin'] }}</span></li>
						</ul>
					</ul>
				</div>
				 @endforeach	
				 @endif
			</div>
			</form>
			
		 END PROFILE DETAIL
		</div> -->
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
									<th>Tanggal</th>
									<th>Keluhan</th>
									<th>Dokter</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>16/9/2020 09:08:00</td>
									<td>Pemeriksaan</td>
									<td>Dr. A, S.Komp.</td>
									<td>
										<a href="{{url('/admin/rekam-medis-edit')}}" type="button" class="btn btn-warning btn-xs">Edit</a>	
										<!-- <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#exampleModal">Edit</button> -->
										<button type="button" class="btn btn-danger btn-xs">Hapus</button>
										<a href="{{url('/admin/rekam-medis-tambah')}}" type="button" class="btn btn-primary btn-xs">Lihat</a>									
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="margin-top-30 text-center"><a href="{{url('/admin/rekam-medis-tambah')}}" class="btn btn-default">Tambah</a></div>
					
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
	</div>
</div>
@endsection