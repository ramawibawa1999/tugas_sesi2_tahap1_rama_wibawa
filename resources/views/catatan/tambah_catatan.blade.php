@extends('layouts.app')

@section('title', 'Tambah Catatan')

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
	    				<div class="card-header bg-primary text-white">Form Tambah Catatan Medik</div>
	    				<div class="card-body">
	    					<form action="/catatan" method="post">
	    						@csrf

	    						<div class="row mb-3">
								    <div class="col-3">
								      <label for="nama_pasien">Pilih Pasien</label>
								    </div>
								    <div class="col-9">
								      <select name="nama_pasien" id="nama_pasien" class="form-control">
                                            @foreach ($pasien as $psi)
                                            <option value="{{$psi->id}}">{{$psi->nama_pasien}}</option>
                                            @endforeach
                                        </select>
								    </div>
								</div>

								<div class="row mb-3">
								    <div class="col-3">
								      <label for="tgl_berobat">Tanggal Berobat</label>
								    </div>
								    <div class="col-9">
								      <input type="date" name="tgl_berobat" class="form-control @error('tgl_berobat') is-invalid @enderror" id="tgl_berobat" placeholder="Masukan tgl_berobat anda" value="{{old('tgl_berobat')}}">
					                    @error('tgl_berobat')
											<p class="ml-2 text-danger"><small>{{ $message }}</small></p>
										@enderror
								    </div>
								</div>

								<div class="row mb-3">
								    <div class="col-3">
								      <label for="keluhan_pasien">Keluhan Pasien</label>
								    </div>
								    <div class="col-9">
								      <input type="text" name="keluhan_pasien" class="form-control @error('keluhan_pasien') is-invalid @enderror" id="keluhan_pasien" placeholder="Masukan keluhan pasien" value="{{old('keluhan_pasien')}}">
					                    @error('keluhan_pasien')
											<p class="ml-2 text-danger"><small>{{ $message }}</small></p>
										@enderror
								    </div>
								</div>

								<div class="row mb-3">
								    <div class="col-3">
								      <label for="hasil_diagnosa">Hasil Diagnosa</label>
								    </div>
								    <div class="col-9">
								      <input type="text" name="hasil_diagnosa" class="form-control @error('hasil_diagnosa') is-invalid @enderror" id="hasil_diagnosa" placeholder="Masukan hasil diagnosa" value="{{old('hasil_diagnosa')}}">
					                    @error('hasil_diagnosa')
											<p class="ml-2 text-danger"><small>{{ $message }}</small></p>
										@enderror
								    </div>
								</div>

	    						<div class="form-group float-right mt-4">
									<a href="/catatan" class="btn btn-sm btn-secondary">Kembali</a>
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