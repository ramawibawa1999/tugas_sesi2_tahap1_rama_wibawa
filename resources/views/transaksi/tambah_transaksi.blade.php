@extends('layouts.app')

@section('title', 'Tambah Transaksi')

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
	    				<div class="card-header bg-primary text-white">Form Tambah Transaksi</div>
	    				<div class="card-body">
	    					<form action="/transaksi" method="post">
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
								      <label for="biaya_berobat">Biaya Berobat</label>
								    </div>
								    <div class="col-9">
								      <input type="text" name="biaya_berobat" class="form-control @error('biaya_berobat') is-invalid @enderror" id="biaya_berobat" placeholder="Masukan biaya_berobat anda" value="{{old('biaya_berobat')}}">
					                    @error('biaya_berobat')
											<p class="ml-2 text-danger"><small>{{ $message }}</small></p>
										@enderror
								    </div>
								</div>

								<div class="row mb-3">
								    <div class="col-3">
								      <label for="kembalian">Kembalian</label>
								    </div>
								    <div class="col-9">
								      <input type="text" name="kembalian" class="form-control @error('kembalian') is-invalid @enderror" id="kembalian" placeholder="Masukan kembalian anda" value="{{old('kembalian')}}">
					                    @error('kembalian')
											<p class="ml-2 text-danger"><small>{{ $message }}</small></p>
										@enderror
								    </div>
								</div>

	    						<div class="form-group float-right mt-4">
									<a href="/transaksi" class="btn btn-sm btn-secondary">Kembali</a>
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