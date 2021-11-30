@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Magang</h3>
									<div class="right">
	  									<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><a class="btn btn-md btn-success">Tambah Data</a></button>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>NISN/NIM</th>
												<th>NAMA</th>
												<th>JENIS KELAMIN</th>
												<th>AGAMA</th>
												<th>ALAMAT</th>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_magang as $magang)
											<tr>
												<td><a href="/magang/{{$magang->id}}/profile">{{ $magang->nim}}</a></td>
												<td><a href="/magang/{{$magang->id}}/profile">{{ $magang->nama}}</a></td>
												<td>{{ $magang->jenis_kelamin}}</td>
												<td>{{ $magang->agama}}</td>
												<td>{{ $magang->alamat}}</td>
												<td>
													<a href="/magang/{{$magang->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
													<a href="/magang/{{$magang->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Akan Dihapus ?')">Delete</a>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Magang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/magang/create" method="POST">
        		{{csrf_field()}}
		 	<div class="form-group">
			    <label for="exampleInputEmail1">NISN/NIM</label>
			    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nim">
			</div>

			<div class="form-group">
			    <label for="exampleInputEmail1">NAMA</label>
			    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama">
			</div>

			 <div class="form-group">
		    <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
			    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
			      <option value="L">Laki-laki</option>
			      <option value="P">Perempuan</option>
			    </select>
		 	</div>

			<div class="form-group">
			    <label for="exampleInputEmail1">AGAMA</label>
			    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama">
			</div>

			<div class="form-group">
			    <label for="exampleFormControlTextarea1">ALAMAT</label>
			    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>

			<div class="form-group">
			    <label for="exampleInputEmail1">NOMOR TELEPON</label>
			    <input name="no_tlp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nomor telepon">
			</div>

			<div class="form-group">
			    <label for="exampleInputEmail1">ASAL SEKOLAH / PERGURUAN TINGGI</label>
			    <input name="asal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="asal sekolah / pergurguruan tinggi">
			</div>

			<div class="form-group">
			    <label for="exampleInputEmail1">DIVISI</label>
			    <input name="divisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="divisi">
			</div>

		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    	</form>
      </div>
    </div>
  </div>
</div>
@stop