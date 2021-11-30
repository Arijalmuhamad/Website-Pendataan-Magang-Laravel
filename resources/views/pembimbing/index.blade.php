@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Pembimbing</h3>
									<div class="right">
	  									<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><a class="btn btn-md btn-success">Tambah Data</a></button>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>NAMA</th>
												<th>BIDANG</th>
												<th>JABATAN</th>
												<th>JENIS KELAMIN</th>
												<th>AGAMA</th>
												<th>ALAMAT</th>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_pembimbing as $pembimbing)
											<tr>
												<td><a href="/pembimbing/{{$pembimbing->id}}/profile">{{ $pembimbing->nama}}</a></td>
												<td><a href="/pembimbing/{{$pembimbing->id}}/profile">{{ $pembimbing->jabatan}}</a></td>
												<td>{{ $pembimbing->jenis_kelamin}}</td>
												<td>{{ $pembimbing->agama}}</td>
												<td>{{ $pembimbing->alamat}}</td>
												<td>
													<a href="/pembimbing/{{$pembimbing->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
													<a href="/pembimbing/{{$pembimbing->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Akan Dihapus ?')">Delete</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pembimbing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pembimbing/create" method="POST">
        		{{csrf_field()}}
		 	<div class="form-group">
			    <label for="exampleInputEmail1">NAMA</label>
			    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama">
			</div>


			<div class="form-group">
			    <label for="exampleInputEmail1">BIDANG</label>
			    <input name="bidang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="bidang">
			</div>

			<div class="form-group">
			    <label for="exampleInputEmail1">JABATAN</label>
			    <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jabatan">
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