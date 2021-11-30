@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Magang</h3>
								</div>
								<div class="panel-body">
									<form action="/magang/{{$magang->id}}/update" method="POST" enctype="multipart/form-data">
        			{{csrf_field()}}
				 	<div class="form-group">
					    <label for="exampleInputEmail1">NISN/NIM</label>
					    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nim" value="{{$magang->nim}}">
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">NAMA</label>
					    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama" value="{{$magang->nama}}">
					</div>

					 <div class="form-group">
				    <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					      <option value="L" @if($magang->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
					      <option value="P" @if($magang->jenis_kelamin == 'P') selected @endif>Perempuan</option>
					    </select>
				 	</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">AGAMA</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama" value="{{$magang->agama}}">
					</div>

					<div class="form-group">
					    <label for="exampleFormControlTextarea1">ALAMAT</label>
					    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$magang->alamat}}</textarea>
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">NOMOR TELEPON</label>
					    <input name="no_tlp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama" value="{{$magang->no_tlp}}">
					</div>

					<div>
					  <label for="exampleInputEmail1">ASAL SEKOLAH / PERGURUAN TINGGI</label>
					  <input name="asal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="asal sekolah / pergurguruan tinggi" value="{{$magang->asal}}">
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">DIVISI</label>
					    <input name="divisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama" value="{{$magang->divisi}}">
					</div>


					<div class="form-group">
					    <label for="exampleFormControlTextarea1">FOTO DIRI</label>
					    <input type="file" name="avatar" class="form-control">
					</div>
					<button type="submit" class="btn btn-warning">Update</button>
    			</form>	
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>		
@stop
@section('content1')
			<h1>Edit Data Magang</h1>
			@if(session('sukses'))
				<div class="alert alert-success" role="alert">
					{{session('sukses')}}
				</div>
			@endif
			<div class="row">
				<div class="col-lg-12">
				<form action="/magang/{{$magang->id}}/update" method="POST">
        			{{csrf_field()}}
				 	<div class="form-group">
					    <label for="exampleInputEmail1">NISN/NIM</label>
					    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nim" value="{{$magang->nim}}">
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">NAMA</label>
					    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama" value="{{$magang->nama}}">
					</div>

					 <div class="form-group">
				    <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					      <option value="L" @if($magang->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
					      <option value="P" @if($magang->jenis_kelamin == 'P') selected @endif>Perempuan</option>
					    </select>
				 	</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">AGAMA</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama" value="{{$magang->agama}}">
					</div>

					<div class="form-group">
					    <label for="exampleFormControlTextarea1">ALAMAT</label>
					    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$magang->alamat}}</textarea>
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">NOMOR TELEPON</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama" value="{{$magang->no_tlp}}">
					</div>

					<div>
					  <label for="exampleInputEmail1">ASAL SEKOLAH / PERGURUAN TINGGI</label>
					  <input name="divisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="asal sekolah / pergurguruan tinggi">
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">DIVISI</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama" value="{{$magang->divisi}}">
					</div>

					<div class="form-group">
					    <label for="exampleFormControlTextarea1">FOTO DIRI</label>
					    <input type="file" name="avatar" class="form-control">
					</div>
					<button type="submit" class="btn btn-warning">Update</button>
    			</form>	
    			</div>
			</div>
		</div>
		
@endsection


