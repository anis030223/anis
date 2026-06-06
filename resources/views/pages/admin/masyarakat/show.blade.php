@extends('layouts.layoutadmin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-id-badge"></i> Detail Data Pegawai
                        </h3>
                        <a href="/pegawai" class="btn btn-sm btn-secondary float-right">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th width="30%">NIK</th>
                                <td>{{ $dataPegawai->nik }}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>{{ $dataPegawai->nama }}</td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td>{{ $dataPegawai->jabatan }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $dataPegawai->jenis_kelamin ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>No. Telepon</th>
                                <td>{{ $dataPegawai->no_telepon ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $dataPegawai->alamat ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $dataPegawai->email ?? '-' }}</td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="card-footer">
                        <a href="/pegawai/{{ $dataPegawai->id }}/edit" class="btn btn-warning">
                            <i class="fa fa-edit"></i> Edit Data
                        </a>
                    </div>
                </div>
                </div>
        </div>
    </div>
</section>
@endsection