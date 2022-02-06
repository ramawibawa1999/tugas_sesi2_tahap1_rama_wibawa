@extends('layouts.app')

@section('title', 'Data Transaksi')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="/transaksi/create" class="btn btn-sm btn-primary mb-2">Tambah Transaksi</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>PASIEN YANG MELAKUKAN TRANSAKSI</th>
                            <th>BIAYA BEROBAT</th>
                            <th>KEMBALIAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>PASIEN YANG MELAKUKAN TRANSAKSI</th>
                            <th>BIAYA BEROBAT</th>
                            <th>KEMBALIAN</th>
                            <th>AKSI</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($transaksi as $tsk)
                        <tr>
                            <td>{{ $tsk->pasien->nama_pasien }}</td>
                            <td>{{ $tsk->biaya_berobat }}</td>
                            <td>{{ $tsk->kembalian }}</td>
                            <td>
                                <!-- <a href="/transaksi/{{$tsk->id}}/edit" class="btn btn-sm btn-warning">Edit</a> -->
                                <form action="/transaksi/{{$tsk->id}}}" method="POST" class="d-inline">
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