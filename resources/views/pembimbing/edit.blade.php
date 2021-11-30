@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<h3>Edit Data Pembimbing</h3>
				<div class="row">
					<div class="col-lg-12">
							 <form action="/pembimbing/{{$pembimbing->id}}/update" method="POST">
		        		{{csrf_field()}}
				 	<div class="form-group">
					    <label for="exampleInputEmail1">NAMA</label>
					    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama" value="{{$pembimbing->nama}}">
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">BIDANG</label>
					    <input name="bidang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="bidang" value="{{$pembimbing->bidang}}">
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">JABATAN</label>
					    <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jabatan" value="{{$pembimbing->jabatan}}">
					</div>

					 <div class="form-group">
				    <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					      <option value="L" @if($pembimbing->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
					      <option value="P" @if($pembimbing->jenis_kelamin == 'P') selected @endif>Perempuan</option>
					    </select>
				 	</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">AGAMA</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama" value="{{$pembimbing->agama}}">
					</div>

					<div class="form-group">
					    <label for="exampleFormControlTextarea1">ALAMAT</label>
					    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>

					<div class="form-group">
					    <label for="exampleFormControlTextarea1">FOTO DIRI</label>
					    <input type="file" name="avatar" class="form-control">
					</div>
		
			      </div>
			      <div class="modal-footer">
			        <button type="submit" class="btn btn-warning">Update</button>
			    	</form>
			    	</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('content1')
			<h1>Edit Data Pembimbing</h1>
			@if(session('sukses'))
				<div class="alert alert-success" role="alert">
					{{session('sukses')}}
				</div>
			@endif
			<div class="row">
				<div class="col-lg-12">
				<form action="/pembimbing/{{$pembimbing->id}}/update" method="POST">
        			{{csrf_field()}}

					<div class="form-group">
					    <label for="exampleInputEmail1">NAMA</label>
					    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama" value="{{$pembimbing->nama}}">
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">BIDANG</label>
					    <input name="bidang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="bidang" value="{{$pembimbing->bidang}}">
					</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">JABATAN</label>
					    <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jabatan" value="{{$pembimbing->jabatan}}">
					</div>

					 <div class="form-group">
				    <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					      <option value="L" @if($pembimbing->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
					      <option value="P" @if($pembimbing->jenis_kelamin == 'P') selected @endif>Perempuan</option>
					    </select>
				 	</div>

					<div class="form-group">
					    <label for="exampleInputEmail1">AGAMA</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama" value="{{$pembimbing->agama}}">
					</div>

					<div class="form-group">
					    <label for="exampleFormControlTextarea1">ALAMAT</label>
					    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pembimbing->alamat}}</textarea>
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