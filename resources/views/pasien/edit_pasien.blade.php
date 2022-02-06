@extends('layouts.app')

@section('title', 'Edit Pasien')

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
					    <div class="col">
					    	<div class="alert alert-info" role="alert">
							  <i class="fas fa-sign-in-alt mr-2"></i>Form edit Pasien
							</div>	
					    	<form action="/pasien/{{$pasien->id}}" method="post">

				                @csrf
				                @method('PUT')

				                <div class="row mb-3 mt-4">
								    <div class="col-3">
								      <label for="nama_pasien">Nama Pasien</label>
								    </div>
								    <div class="col-9">
								      <input type="text" name="nama_pasien" class="form-control @error('nama_pasien') is-invalid @enderror" id="nama_pasien" placeholder="Masukan nama pasien" value="{{old('nama_pasien') ? old('nama_pasien') : $pasien->nama_pasien}}">
					                    @error('nama_pasien')
											<p class="ml-2 text-danger"><small>{{ $message }}</small></p>
										@enderror
								    </div>
								</div>

								<div class="row mb-3">
								    <div class="col-3">
								      <label for="nama_pelanggan">Jenis Kelamin</label>
								    </div>
								    <div class="col-9">
								      <div class="form-check">
										  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="L" {{$pasien->jenis_kelamin == 'L'? 'checked' : ''}}>
										  <label class="form-check-label" for="laki">
										    Laki - Laki
										  </label>
									   </div>
									   <div class="form-check">
										  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" {{$pasien->jenis_kelamin == 'P'? 'checked' : ''}}>
										  <label class="form-check-label" for="perempuan">
										    Perempuan
										  </label>
									   </div>

					                    @error('jenis_kelamin')
											<p class="ml-2 text-danger"><small>{{ $message }}</small></p>
										@enderror
								    </div>
								</div>

								<div class="row mb-3">
								    <div class="col-3">
								      <label for="umur">Umur</label>
								    </div>
								    <div class="col-9">
								    	<div class="form-group">
										    <textarea class="form-control @error('umur') is-invalid @enderror" id="umur" rows="3" placeholder="Masukan umur anda" name="umur">{{old('umur') ? old('umur') : $pasien->umur}}</textarea>
										</div>
					                    @error('umur')
											<p class="ml-2 text-danger"><small>{{ $message }}</small></p>
										@enderror
								    </div>
								</div>

								<div class="form-group float-right mt-4">
									<a href="/pelanggan" class="btn btn-secondary">Kembali</a>
				                    <button type="submit" class="btn btn-primary">Simpan</button>
								</div>				               
				              
				            </form>

					    </div>
					    <div class="col">
					      <!-- 2 of 2 -->
					    </div>
					</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
    </div>
@endsection