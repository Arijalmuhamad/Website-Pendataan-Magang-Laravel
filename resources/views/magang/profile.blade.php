@extends('layouts.master')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{$magang->getAvatar()}}" alt="Avatar" width="150px">
										<h3 class="name">{{$magang->nama}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="stat-item">
												Asal Sekolah/Perguruan Tinggi :<span>{{$magang->asal}}</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								
								<!-- TABBED CONTENT -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">DATA DIRI</h4>
										<ul class="list-unstyled list-justify">
											<li>NISN/NIM<span>{{$magang->nim}}</span></li>
											<li>NAMA<span>{{$magang->nama}}</span></li>
											<li>JENIS KELAMIN<span>{{$magang->jenis_kelamin}}</span></li>
											<li>AGAMA<span>{{$magang->agama}}</span></li>
											<li>ALAMAT<span>{{$magang->alamat}}</span></li>
											<li>NOMOR TELEPON<span>{{$magang->no_tlp}}</span></li>
											<li>DIVISI<span>{{$magang->divisi}}</span></li>
										</ul>
									</div>
									
									<div class="text-center"><a href="/magang/{{$magang->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
								</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@stop