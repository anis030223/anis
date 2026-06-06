@extends('layouts.layoutadmin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center mb-3">
                        <i class="fa fa-user-circle fa-5x text-secondary"></i>
                    </div>
                    <h3 class="profile-username text-center">{{ $pegawai->nama ?? 'Nama Tidak Ditemukan' }}</h3>
                    <p class="text-muted text-center">{{ $pegawai->jabatan ?? '-' }}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>NIK</b> <a class="float-right text-dark">{{ $pegawai->nik ?? '-' }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Jenis Kelamin</b> <a class="float-right text-dark">{{ $pegawai->jenis_kelamin ?? '-' }}</a>
                        </li>
                    </ul>

                    <a href="/pegawai" class="btn btn-warning btn-block">
                        <i class="fa fa-undo"></i> Kembali ke Daftar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fa fa-file-alt"></i> Detail Lengkap Data Pegawai</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width: 30%">No. Telepon</th>
                            <td>{{ $pegawai->no_telepon ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $pegawai->email ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $pegawai->alamat ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Hak Akses / Jabatan</th>
                            <td>
                                @if(($pegawai->jabatan ?? '') == 'Admin')
                                    <span class="badge badge-success">Admin</span>
                                @else
                                    <span class="badge badge-info">Petugas</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection