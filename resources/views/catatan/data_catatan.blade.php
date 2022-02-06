@extends('layouts.app')

@section('title', 'Catatan Medik')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Catatan Medik</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="/catatan/create" class="btn btn-sm btn-primary mb-2">Tambah Catatan Medik</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NAMA PASIEN</th>
                            <th>TANGGAL BEROBAT</th>
                            <th>KELUHAN PASIEN</th>
                            <th>HASIL DIAGNOSA</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NAMA PASIEN</th>
                            <th>TANGGAL BEROBAT</th>
                            <th>KELUHAN PASIEN</th>
                            <th>HASIL DIAGNOSA</th>
                            <th>AKSI</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($catatan as $ctt)
                        <tr>
                            <td>{{ $ctt->pasien->nama_pasien }}</td>
                            <td>{{ $ctt->tgl_berobat }}</td>
                            <td>{{ $ctt->keluhan_pasien }}</td>
                            <td>{{ $ctt->hasil_diagnosa }}</td>

                  
                            <td>
                                <a href="/catatan/{{$ctt->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/catatan/{{$ctt->id}}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection