@extends('staff.master-staff')

@section('active-rm-1') active @endsection

@section('content')
<div class="row">
	<div class="col-md-7">
		<!-- PANEL HEADLINE -->
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title">Samuel Gold</h3>
				<p class="panel-subtitle">Data Diri</p>
			</div>
			<div class="panel-body">
				<!-- PROFILE DETAIL -->
				<div class="col-md-4">
					<img src="{{asset('assets/img/user-medium.png')}}" class="img-circle" alt="Avatar">
				</div>
				<div class="col-md-6">
					<div class="profile-detail" style="padding-bottom: 0px !important;">
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
		</div>
		<!-- END PANEL HEADLINE -->
	</div>
	<div class="col-md-5">
		<!-- PANEL NO PADDING -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Penyakit</h3>
			</div>
			<div class="panel-body">
				<!-- TABLE STRIPED -->
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Steve</td>
							<td>Jobs</td>
							<td>@steve</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Simon</td>
							<td>Philips</td>
							<td>@simon</td>
						</tr>
					</tbody>
				</table>
				<!-- END TABLE STRIPED -->
			</div>
		</div>
		<!-- END PANEL NO PADDING -->
	</div>
</div>
@endsection

@section('title-content') Hasil Periksa @endsection

@section('subtitle-content') 16/9/2020 09:08:00 @endsection

@section('main-content')
<!-- TABLE STRIPED -->
<table class="table table-bordered">
	<thead>
		<tr>
			<th width="5%">#</th>
			<th width="40%">Indikator</th>
			<th width="">Hasil</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td style="text-align: left;">Keluhan</td>
			<td style="text-align: left;">Steve</td>
		</tr>
		<tr>
			<td>2</td>
			<td style="text-align: left;">Anamnesa Pemeriksaan Fisik Perawat</td>
			<td style="text-align: left;">Steve</td>
		</tr>
		<tr>
			<td>3</td>
			<td style="text-align: left;">Anamnesa Pemeriksaan Dokte</td>
			<td style="text-align: left;">Steve</td>
		</tr>
		<tr>
			<td>4</td>
			<td style="text-align: left;">Tinggi Badan</td>
			<td style="text-align: left;">Steve</td>
		</tr>
		<tr>
			<td>5</td>
			<td style="text-align: left;">Berat Badan</td>
			<td style="text-align: left;">Steve</td>
		</tr>
		<tr>
			<td>6</td>
			<td style="text-align: left;">Sistole</td>
			<td style="text-align: left;">Steve</td>
		</tr>
		<tr>
			<td>7</td>
			<td style="text-align: left;">Diastole</td>
			<td style="text-align: left;">Steve</td>
		</tr>
		<tr>
			<td>8</td>
			<td style="text-align: left;">Respirasi</td>
			<td style="text-align: left;">Steve</td>
		</tr>
		<tr>
			<td>9</td>
			<td style="text-align: left;">Nadi</td>
			<td style="text-align: left;">Steve</td>
		</tr>
		<tr>
			<td>10</td>
			<td style="text-align: left;">Diagnosa</td>
			<td style="text-align: left;">Steve</td>
		</tr>
		<tr>
			<td>11</td>
			<td style="text-align: left;">Dokter</td>
			<td style="text-align: left;">Steve</td>
		</tr>
		<tr>
			<td>12</td>
			<td style="text-align: left;">Perawat</td>
			<td style="text-align: left;">Steve</td>
		</tr>
		<tr>
			<td>13</td>
			<td style="text-align: left;">Apoteker</td>
			<td style="text-align: left;">Steve</td>
		</tr>
	</tbody>
</table>
<!-- END TABLE STRIPED -->
@endsection