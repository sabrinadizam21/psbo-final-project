@extends('staff.master-staff')

@section('active-rm-1') active @endsection

@section('title-content') Rekam Medis @endsection

@section('subtitle-content') Mahasiswa @endsection

@section('main-content')
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
						<table class='table'>
                                            <tr>
                                                
                                                <th>Berat Badan</th>
                                                <th>Tekanan Darah</th>
                                                
                                            </tr>
                                            @foreach($rekammedis as $rekammedises)
                                            <tr>
                                                
                                                <td>{{$rekammedises->berat_badan}}</td>
                                                <td>{{$rekammedises->tekanan_darah}}</td>
                                                                                               
                                            </tr>
                                            @endforeach
                                            
                                        </table>
					</div>
					
					
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