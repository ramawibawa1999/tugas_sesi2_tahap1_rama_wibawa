@extends('layouts.app')

@section('title', 'Tambah Pasien')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
	    <!-- Begin Page Content -->
	    <div class="container-fluid mt-4">
	    	<div class="row">
	    		<div class="col-6">
	    			<div class="card">
	    				<div class="card-header bg-primary text-white">Form Tambah Pasien</div>
	    				<div class="card-body">
	    					<form action="/pasien" method="post">
	    						@csrf

	    						<div class="row mb-3">
								    <div class="col-3">
								      <label for="nama_pasien">Nama Pasien</label>
								    </div>
								    <div class="col-9">
								      <input type="text" name="nama_pasien" class="form-control @error('nama_pasien') is-invalid @enderror" id="nama_pasien" placeholder="Masukan Nama Pasien" value="{{old('nama_pasien')}}">
					                    @error('nama_pasien')
											<p class="ml-2 text-danger"><small>{{ $message }}</small></p>
										@enderror
								    </div>
								</div>

								<div class="row mb-3">
								    <div class="col-3">
								      <label for="jenis_kelamin">Jenis Kelamin</label>
								    </div>
								    <div class="col-9">
								      	<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
	    										<option value="L">Laki - Laki</option>
	    										<option value="P">Perempuan</option>
	    								</select>
								    </div>
								</div>

								<div class="row mb-3">
								    <div class="col-3">
								      <label for="umur">Umur</label>
								    </div>
								    <div class="col-9">
								      <input type="text" name="umur" class="form-control @error('umur') is-invalid @enderror" id="umur" placeholder="Masukan umur anda" value="{{old('umur')}}">
					                    @error('umur')
											<p class="ml-2 text-danger"><small>{{ $message }}</small></p>
										@enderror
								    </div>
								</div>

	    						<div class="form-group float-right mt-4">
									<a href="/pasien" class="btn btn-sm btn-secondary">Kembali</a>
				                    <input type="submit" name="submit" value="Simpan" class="btn btn-sm btn-primary">
								</div>	

	    					</form>
	    				</div>
	    			</div>
	    		</div>
	    	</div>

	    </div>
	    <!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->
</div>
@endsection