@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pasien</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="/pasien/create" class="btn btn-sm btn-primary mb-2">Tambah Pasien</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NAMA PASIEN</th>
                            <th>JENIS KELAMIN</th>
                            <th>UMUR</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NAMA PASIEN</th>
                            <th>JENIS KELAMIN</th>
                            <th>UMUR</th>
                            <th>AKSI</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($pasien as $psi)
                        <tr>
                            <td>{{ $psi->nama_pasien }}</td>
                            <td>{{ $psi->jenis_kelamin }}</td>
                            <td>{{ $psi->umur }}</td>
                            <td>
                                <a href="/pasien/{{$psi->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/pasien/{{$psi->id}}}" method="POST" class="d-inline">
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