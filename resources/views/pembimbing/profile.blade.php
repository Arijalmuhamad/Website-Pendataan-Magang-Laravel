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
										<img src="{{$pembimbing->getAvatar()}}" alt="Avatar" width="150px">
										<h3 class="name">{{$pembimbing->nama}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="stat-item">
												Bidang :<span>{{$pembimbing->bidang}}</span>
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
											<li>NAMA<span>{{$pembimbing->nama}}</span></li>
											<li>BIDANG<span>{{$pembimbing->bidang}}</span></li>
											<li>JABATAN<span>{{$pembimbing->jabatan}}</span></li>
											<li>JENIS KELAMIN<span>{{$pembimbing->jenis_kelamin}}</span></li>
											<li>AGAMA<span>{{$pembimbing->agama}}</span></li>
											<li>ALAMAT<span>{{$pembimbing->alamat}}</span></li>
										</ul>
									</div>
									
									<div class="text-center"><a href="/pembimbing/{{$pembimbing->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
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